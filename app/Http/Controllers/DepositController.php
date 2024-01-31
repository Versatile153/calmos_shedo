<?php
// app/Http/Controllers/DepositController.php

namespace App\Http\Controllers;
use App\Models\Deposit;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Artisan;
// use App\Models\Deposit;
use App\Models\Transaction;

use Illuminate\Http\Request;

class DepositController extends Controller
{
    public function create()
    {
        return view('deposits.create');
    }

    public function history1()
    {
        return view('deposits.history');
    }


    public function store(Request $request)
    {
        $request->validate([
            'gateway' => 'required',
            'amount' => 'required|numeric',
            // Add validation rules for other fields if needed
        ]);

        // Generate a unique code using Str::uuid()
        $code = strtoupper(Str::random(8));

        // Create a new deposit linked to the logged-in user with the generated code and default status
        $user = auth()->user();
        $deposit = $user->deposits()->create([
            'gateway' => $request->gateway,
            'amount' => $request->amount,
            'code' => $code,
            'status' => 'pending', // Set the default status to 'pending'
            // Add other fields as needed
        ]);

        return redirect()
        ->route('deposits.confirmation', ['deposit' => $deposit])
        ->with('success', 'Deposit successful, waiting confirmation!'); // You can customize the message as needed

    }









    public function confirmation()
    {
        $totalDeposits = auth()->user()->deposits()->sum('amount');
        // Get the sum of amounts for approved deposits
        $sumOfApprovedDeposits = auth()->user()->deposits()->where('status', 'approved')->sum('amount');

        // Get the sum of amounts for pending deposits
        $sumOfPendingDeposits = auth()->user()->deposits()->where('status', 'pending')->sum('amount');

        return view('deposits.confirmation', compact('totalDeposits', 'sumOfApprovedDeposits', 'sumOfPendingDeposits'));
        // return view('deposits.confirmation');
    }


    // Example in a controller method

// public function history()
// {
//     $user = auth()->user();
//     $deposits = $user->deposits;
//     $confirmations = $user->depositConfirmations;

//     return view('deposits.history', compact('deposits', 'confirmations'));
// }



public function history()
{
    // Retrieve the currently logged-in user
    $user = auth()->user();
    $totalDeposits = auth()->user()->deposits()->sum('amount');
    // Get the sum of amounts for approved deposits
    $sumOfApprovedDeposits = auth()->user()->deposits()->where('status', 'approved')->sum('amount');

    // Get the sum of amounts for pending deposits
    $sumOfPendingDeposits = auth()->user()->deposits()->where('status', 'pending')->sum('amount');
    $deposits = $user->deposits;

    return view('deposits.history', compact('totalDeposits', 'sumOfApprovedDeposits', 'sumOfPendingDeposits','deposits'));

    // Retrieve the deposits for the user

    // return view('deposits.history', ['deposits' => $deposits]);
}





//transaction confirmation

public function storeTxn(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:pdf,png,jpg,jpeg,gif|max:2048',
            // Add other validation rules for your form fields
        ]);


        // Get the logged-in user
        $user = auth()->user();

        // Store the uploaded file
        $filePath = $request->file('file')->store('transaction_files', 'public');

        // Create a new transaction
        $transaction = new Transaction([
            'user_id' => $user->id,
            'file' => $filePath,
            // Add other fields if needed
        ]);

        $transaction->save();

        return redirect()->route('deposits.history')->with('success', 'Transaction saved successfully, awaiting verification.');
    }


    public function runScheduler()
    {
        // Your logic to increment and update profits

        // Run Laravel scheduler command
        Artisan::call('schedule:run');

        return 'Scheduler executed successfully';
    }
}

