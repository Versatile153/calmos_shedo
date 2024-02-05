<?php

// app/Http/Controllers/WithdrawController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Withdraw;
use App\Models\Invest;

// use App\Models\Withdraw;
use Illuminate\Support\Facades\Auth;

class WithdrawController extends Controller
{
    // public function index()
    // {
    //     $withdraws = Withdraw::all();
    //     return view('withdraws.index', compact('withdraws'));
    // }

    // public function create()
    // {
    //     return view('withdraws.create');
    // }

    public function store(Request $request)
    {
        $request->validate([
            'gateway' => 'required|string',
            'amount' => 'required|numeric',
        ]);

        // Get the currently authenticated user
        $user = Auth::user();



        $userInvests = Invest::where('user_id', $user->id)
        ->where('status', 'approved')
        ->orderBy('created_at') // Order investments by creation time
        ->get();

    $withdrawalAmount = $request->input('amount');

 // Assuming $withdrawalAmount is the requested withdrawal amount

// Check if withdrawal amount is greater than the sum of user profits
if ($withdrawalAmount > $userInvests->sum('profits')) {
    return back()->with('error', 'Insufficient profits for withdrawal.');
}

foreach ($userInvests as $investment) {
    if ($investment->profits >= $withdrawalAmount) {
        $investment->profits -= $withdrawalAmount;
        $investment->save();
        break;
    } else {
        $withdrawalAmount -= $investment->profits;
        $investment->profits = 0;
        $investment->save();
    }
}

// Continue with the rest of your code




        // Create and save the withdrawal using the user's relationship
        $withdraw = $user->withdraws()->create([
            'gateway' => $request->gateway,
            'amount' => $request->amount,
            'wallet' => $request->wallet,

            'status' => 'pending',
        ]);








        return redirect()->route('dashboard.transaction')
            ->with('success', 'Withdrawal request submitted successfully.');
    }

    // Add other methods as needed (e.g., edit, update, delete)
}
