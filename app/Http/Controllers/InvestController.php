<?php
// app\Http\Controllers\InvestController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invest;

class InvestController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric',
            'gateway' => 'required',
        ]);

        // Get the logged-in user
        $user = auth()->user();

        // Create a new investment for the user
        $investment = $user->invests()->create([
            'amount' => $request->amount,
            'gateway' => $request->gateway,
            'status' => 'pending', // Set default status to 'pending'
        ]);

        // Redirect or respond as needed
        return redirect()->route('investment')->with('success', 'Investment created successfully.');
    }
}

