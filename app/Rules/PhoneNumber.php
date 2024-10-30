<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class PhoneNumber implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */

     protected $validPrefixes = [
        '013', '017', // Grameenphone
        '014', '019', // Banglalink
        '015',        // Teletalk
        '016', '018', // Robi (016 primarily used by Airtel)
        // '011'         // Citycell (closed in 2016)
    ];
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (!preg_match('/^\d{11}$/', $value)) {
            $fail("The $attribute must be exactly 11 digits.");
            return;
        }

        // Extract the prefix (first three digits)
        $prefix = substr($value, 0, 3);

        // Check if the prefix is valid
        if (!in_array($prefix, $this->validPrefixes)) {
            $fail("The $attribute number is not valid. Must start with a valid prefix: " . implode(', ', $this->validPrefixes));
        }
        
    }
}
