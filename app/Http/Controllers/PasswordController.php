<?php
// app/Http/Controllers/PasswordController.php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class PasswordController extends Controller
{
    public function edit()
    {
        return view('auth.passwords.edit');
    }

    public function update(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|confirmed|min:8',
        ]);

        $user = auth()->user();

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'The current password is incorrect.']);
        }

        $user->update([
            'password' => bcrypt($request->password),
        ]);

        return redirect('/')->with('success', 'Password changed successfully.');
    }
}
