<?php

namespace App\Http\Controllers;
use App\Models\Deposit;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalDeposits = auth()->user()->deposits()->sum('amount');
        // Get the sum of amounts for approved deposits
        $sumOfApprovedDeposits = auth()->user()->deposits()->where('status', 'approved')->sum('amount');

        // Get the sum of amounts for pending deposits
        $sumOfPendingDeposits = auth()->user()->deposits()->where('status', 'pending')->sum('amount');

        return view('home', compact('totalDeposits', 'sumOfApprovedDeposits', 'sumOfPendingDeposits'));
    }
}
