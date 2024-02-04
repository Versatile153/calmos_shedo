<?php

// app/Http/Controllers/WithdrawController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Withdraw;
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
