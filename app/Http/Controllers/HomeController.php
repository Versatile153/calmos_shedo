<?php

namespace App\Http\Controllers;
use App\Models\Deposit;
use App\Models\Withdraw;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
        $user = Auth::user();
        $totalDeposits = auth()->user()->deposits()->sum('amount');
        // Get the sum of amounts for approved deposits
        $sumOfApprovedDeposits = auth()->user()->deposits()->where('status', 'approved')->sum('amount');

        // Get the sum of amounts for pending deposits
        $sumOfPendingDeposits = auth()->user()->deposits()->where('status', 'pending')->sum('amount');
        $sumOfPendingWithdraws = auth()->user()->withdraws()->where('status', 'pending')->sum('amount');
        $sumOfApprovedWithdraws = auth()->user()->withdraws()->where('status', 'paid')->sum('amount');
        $sumOfTotalWithdraws = auth()->user()->withdraws()->sum('amount');

        $sumOfTotalInvests = auth()->user()->invests()->sum('amount');
        $sumOfApprovedInvest = auth()->user()->invests()->where('status', 'approved')->sum('amount');
        $sumOfPendingInvest = auth()->user()->invests()->where('status', 'pending')->sum('amount');
        $sumOfInterestInvest = auth()->user()->invests()->where('status', 'approved')->sum('profits');






        return view('home', compact('totalDeposits', 'sumOfApprovedDeposits', 'sumOfPendingDeposits','sumOfTotalWithdraws','sumOfPendingWithdraws','sumOfApprovedWithdraws','sumOfTotalInvests','sumOfApprovedInvest','sumOfPendingInvest','sumOfInterestInvest'));
    }
}
