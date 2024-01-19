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

        // Create a new Withdraw record and associate it with the user
        $withdraw = new Withdraw([
            'gateway' => $request->input('gateway'),
            'amount' => $request->input('amount'),
            'wallet' => $request->input('wallet'), // Adjust based on your form field name
        ]);

        // Save the withdrawal record
        $withdraw->user()->associate($user); // Assuming there is a 'user' relationship in the Withdraw model
        $withdraw->save();

        // Check if the withdrawal is approved


        return redirect()->route('dashboard.transaction')
            ->with('success', 'Withdrawal request submitted successfully.');
    }

    // Add other methods as needed (e.g., edit, update, delete)
}
