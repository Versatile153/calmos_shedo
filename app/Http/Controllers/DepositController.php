<?php
// app/Http/Controllers/DepositController.php

namespace App\Http\Controllers;
use App\Models\Deposit;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Artisan;
// use App\Models\Deposit;

use SimpleSoftwareIO\QrCode\Facades\QrCode;
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


        $user = auth()->user();
        $deposit = $user->deposits()->create([
            'gateway' => $request->gateway,
            'amount' => $request->amount,
            'code' => $code,
            'status' => 'pending', // Set the default status to 'pending'
            // Add other fields as needed
        ]);

        $formData = $request->all();
        session()->put('depositFormData', $formData);
        return redirect()
        ->route('deposits.confirmation', ['deposit' => $deposit])
        ->with('success', 'Deposit successful, waiting confirmation!'); // You can customize the message as needed

    }









    public function confirmation()
    {
        $bitcoinAddress = '15C5EsMZpy7QXFZziP2FGkfkQ4xDow8k87';
        $trcAddress = 'TQR8judMcbCt9SypNa4wW3ybZXRVDHTtcL';


        $formData = session()->get('depositFormData', []);
        $qrCodebtc = QrCode::size(300)->generate($bitcoinAddress);
        $qrCodetrc = QrCode::size(300)->generate($trcAddress);





        $sumOfInterestInvest = auth()->user()->invests()->where('status', 'approved')->sum('profits');
        $totalDeposits = auth()->user()->deposits()->sum('amount');
        $depositFormData = session()->get('depositFormData', []);

        $sumOfApprovedDeposits = auth()->user()->deposits()->where('status', 'approved')->sum('amount');


        $sumOfPendingDeposits = auth()->user()->deposits()->where('status', 'pending')->sum('amount');

        return view('deposits.confirmation', compact('totalDeposits', 'sumOfApprovedDeposits', 'sumOfPendingDeposits','qrCodetrc','depositFormData','qrCodebtc','bitcoinAddress','trcAddress','sumOfInterestInvest'));

    }






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

    $sumOfInterestInvest = auth()->user()->invests()->where('status', 'approved')->sum('profits');
    return view('deposits.history', compact('totalDeposits', 'sumOfApprovedDeposits', 'sumOfPendingDeposits','deposits','sumOfInterestInvest'));

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

