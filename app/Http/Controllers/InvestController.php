<?php
// app\Http\Controllers\InvestController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invest;
use App\Models\Deposit;


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


        $userDeposits = Deposit::where('user_id', $user->id)
    ->where('status', 'approved')
    ->orderBy('created_at') // Order deposits by creation time
    ->get();




    $investmentAmount = $request->input('amount');

    if (   $investmentAmount > $userDeposits->sum('amount')) {
        return back()->with('error', 'Insufficient profits for investment.');
    }
    foreach ($userDeposits as $deposit) {
        // Only deduct from deposits with gateway 'deposit_wallet'
        if ($request->gateway === 'deposit_wallet' && $deposit->amount >= $investmentAmount) {
            $deposit->amount -= $investmentAmount;
            $deposit->save();
            break;
        } elseif ($request->gateway === 'deposit_wallet') {
            $investmentAmount -= $deposit->amount;
            $deposit->amount = 0;
            $deposit->save();
        }
    }


    $userInvests = Invest::where('user_id', $user->id)
    ->where('status', 'approved')
    ->orderBy('created_at')
    ->get();

$withdrawalAmount = $request->input('amount');

// foreach ($userInvests as $investment) {

//     if ($investment->profits >= $withdrawalAmount) {
//         $investment->profits -= $withdrawalAmount;
//         $investment->save();
//         break;
//     } else {
//         $withdrawalAmount -= $investment->profits;
//         $investment->profits = 0;
//         $investment->save();
//     }
// }



if (  $withdrawalAmount > $userInvests->sum('profits')) {
    return back()->with('error', 'Insufficient profits for investment.');
}
foreach ($userInvests as $deposit) {
    // Only deduct from deposits with gateway 'deposit_wallet'
    if ($request->gateway === 'interest_wallet' && $deposit->profits >= $investmentAmount) {
        $deposit->profits -= $investmentAmount;
        $deposit->save();
        break;
    } elseif ($request->gateway === 'interest_wallet') {
        $investmentAmount -= $deposit->profits;
        $deposit->profits = 0;
        $deposit->save();
    }
}



        // Create a new investment for the user
        $investment = $user->invests()->create([
            'amount' => $request->amount,
            'gateway' => $request->gateway,
            'status' => 'pending', // Set default status to 'pending'
        ]);


        return redirect()->route('investment')->with('success', 'Investment created successfully.');
    }
}

