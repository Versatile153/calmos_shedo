<?php
// app/Http/Controllers/ProfileController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('profile.edit');
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . auth()->id(),
            'country' => 'required|string|max:255', // Add validation rules for 'country'
            'mobile' => 'required|string|max:255', // Add validation rules for 'mobile'
            // Add other validation rules for your form fields
        ]);


        auth()->user()->update($request->all());

        return redirect('/')->with('success', 'Profile updated successfully.');
    }




}

