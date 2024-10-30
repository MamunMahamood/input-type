<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');                            // Basic name field
            $table->string('email')->unique();                 // Unique email field
            $table->timestamp('email_verified_at')->nullable(); // Email verification timestamp
            $table->string('password');                        // Password field
            $table->string('username')->nullable();            // text
            $table->string('website')->nullable();             // url
            $table->string('phone')->nullable();               // tel
            $table->integer('age')->nullable();                // number
            $table->integer('rating')->nullable();             // range
            $table->date('birthdate')->nullable();             // date
            $table->string('birthmonth')->nullable();          // month
            $table->string('birthweek')->nullable();           // week
            $table->time('preferred_time')->nullable();        // time
            $table->dateTime('appointment')->nullable();       // datetime-local
            $table->string('favorite_color')->nullable();      // color
            $table->boolean('newsletter')->default(false);     // checkbox
            $table->enum('gender', ['male', 'female', 'other'])->nullable(); // radio
            $table->string('profile_picture')->nullable();     // file
            $table->string('referrer')->nullable();            // hidden       
            $table->enum('status', ['active', 'inactive'])->default('active'); // image
            $table->rememberToken();                           // Remember token for authentication
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
