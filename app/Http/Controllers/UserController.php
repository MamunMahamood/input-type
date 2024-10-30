<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Rules\PhoneNumber;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('is_delete', 0)->get();
        return view('user.list', compact('users'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $file = '';

        

        
       
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'username' => 'nullable|string|max:255',
            'website' => 'nullable|url',
            'phone' => ['nullable', 'string', new PhoneNumber()], 
            'age' => 'nullable|integer',
            'rating' => 'nullable|integer',
            'birthdate' => 'nullable|date',
            'birthmonth' => 'nullable|string|max:255',
            'birthweek' => 'nullable|string|max:255',
            'preferred_time' => 'nullable|date_format:H:i', 
            'appointment' => 'nullable',
            'favorite_color' => 'nullable|string|max:7',
            'newsletter' => 'boolean',
            'gender' => 'nullable|in:male,female,other',
            'profile_picture' => 'nullable|file|mimes:jpg,jpeg,png|max:2048',
            'referrer' => 'nullable|string|max:255',
            'status' => 'nullable|in:active,inactive',
        ]);

        if ($request->hasFile('profile_picture')) {
            $filename = time() . '.' . $request->profile_picture->extension();
            // Move the uploaded file to the public/assets/img directory
            $request->profile_picture->move(public_path('/assets/img'), $filename);
            // Store the relative file path
            $file = '/assets/img/' . $filename;
        }

        $validatedData['password'] = Hash::make($validatedData['password']);

        $validatedData['profile_picture'] = $file;
        
        

        User::create($validatedData);

        return redirect()->route('user.list')
            ->with('success', 'Record created successfully!');
    }


    public function edit($id){
        $user = User::findorfail($id);
        return view('user.edit', compact('user'));
    }


    public function update($id, Request $request){
        $user = User::findorfail($id);
        $file = '';
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'nullable|string|min:8|confirmed',
            'username' => 'nullable|string|max:255',
            'website' => 'nullable|url',
            'phone' => ['nullable', 'string', new PhoneNumber()], 
            'age' => 'nullable|integer',
            'rating' => 'nullable|integer',
            'birthdate' => 'nullable|date',
            'birthmonth' => 'nullable|string|max:255',
            'birthweek' => 'nullable|string|max:255',
            'preferred_time' => 'nullable|date_format:H:i', 
            'appointment' => 'nullable',
            'favorite_color' => 'nullable|string|max:7',
            'newsletter' => 'boolean',
            'gender' => 'nullable|in:male,female,other',
            'profile_picture' => 'nullable|file|mimes:jpg,jpeg,png|max:2048',
            'referrer' => 'nullable|string|max:255',
            'status' => 'nullable|in:active,inactive',
        ]);

        if ($request->hasFile('profile_picture')) {
            $filename = time() . '.' . $request->profile_picture->extension();
            // Move the uploaded file to the public/assets/img directory
            $request->profile_picture->move(public_path('/assets/img'), $filename);
            // Store the relative file path
            $file = '/assets/img/' . $filename;
        }

        $validatedData['password'] = Hash::make($validatedData['password']);

        $validatedData['profile_picture'] = $file;

        $user->update($validatedData);

        return redirect()->route('user.list')
            ->with('success', 'Record created successfully!');

    }


    public function delete($id){
        $user = User::findorfail($id);

        $user->is_delete = 1;
        $user->save();

        return redirect()->route('user.list')
        ->with('success', 'Record created successfully!');

    }
}
