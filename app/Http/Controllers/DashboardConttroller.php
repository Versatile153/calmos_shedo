<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class DashboardConttroller extends Controller
{

    public  function deposit(){


        $totalDeposits = auth()->user()->deposits()->sum('amount');
        // Get the sum of amounts for approved deposits
        $sumOfApprovedDeposits = auth()->user()->deposits()->where('status', 'approved')->sum('amount');

        // Get the sum of amounts for pending deposits
        $sumOfPendingDeposits = auth()->user()->deposits()->where('status', 'pending')->sum('amount');

        return view('dashboard.deposit', compact('totalDeposits', 'sumOfApprovedDeposits', 'sumOfPendingDeposits'));
        // return view('dashboard.deposit');
    }


    public  function withdraw(){
        $user = Auth::user();
        $totalDeposits = auth()->user()->deposits()->sum('amount');
        // Get the sum of amounts for approved deposits
        $sumOfApprovedDeposits = auth()->user()->deposits()->where('status', 'approved')->sum('amount');
        $totalProfits = $user->invests()->sum('profits');

        // Get the sum of amounts for pending deposits
        $sumOfPendingDeposits = auth()->user()->deposits()->where('status', 'pending')->sum('amount');

        return view('dashboard.withdraw', compact('totalDeposits', 'sumOfApprovedDeposits', 'sumOfPendingDeposits','user','totalProfits'));
        // return view('dashboard.withdraw');
    }

    public function investment()
{
    // Get the logged-in user
    $user = auth()->user();

    $totalDeposits = auth()->user()->deposits()->sum('amount');
        // Get the sum of amounts for approved deposits
        $sumOfApprovedDeposits = auth()->user()->deposits()->where('status', 'approved')->sum('amount');

    // Fetch the sum of investments for pending status
    $pendingSum = DB::table('invests')
        ->where('user_id', $user->id)
        ->where('status', 'pending')
        ->sum('amount');

    // Fetch the sum of investments for approved status
    $approvedSum = DB::table('invests')
        ->where('user_id', $user->id)
        ->where('status', 'approved')
        ->sum('amount');



        $activeInvestments = $user->invests()->where('status', 'approved')->get();
        $totalProfits = $user->invests()->sum('profits');
        // Use $activeInvestments as needed (e.g., pass it to a view)
        // return view('your_view_name', ['activeInvestments' => $activeInvestments]);


        $investments = $user->invests;

        // Use $investments as needed (e.g., pass it to a view)
        // return view('investments.index', ['investments' => $investments]);
    return view('dashboard.investment', [
        'pendingSum' => $pendingSum,
        'approvedSum' => $approvedSum,
        'sumOfApprovedDeposits' => $sumOfApprovedDeposits,
        'investments' => $investments,
        'activeInvestments' => $activeInvestments,
        'totalProfits' => $totalProfits

    ]);
}


    public  function transfer(){
        $totalDeposits = auth()->user()->deposits()->sum('amount');
        // Get the sum of amounts for approved deposits
        $sumOfApprovedDeposits = auth()->user()->deposits()->where('status', 'approved')->sum('amount');

        // Get the sum of amounts for pending deposits
        $sumOfPendingDeposits = auth()->user()->deposits()->where('status', 'pending')->sum('amount');

        return view('dashboard.transfer', compact('totalDeposits', 'sumOfApprovedDeposits', 'sumOfPendingDeposits'));
        // return view('dashboard.transfer');
    }

    public  function transaction(){
        $user = Auth::user();

        // Fetch withdrawals for the logged-in user
        $userWithdrawals = $user->withdrawals;
        $totalProfits = $user->invests()->sum('profits');

        // return view('withdraws.index', compact('userWithdrawals'));

        $totalDeposits = auth()->user()->deposits()->sum('amount');
        // Get the sum of amounts for approved deposits
        $sumOfApprovedDeposits = auth()->user()->deposits()->where('status', 'approved')->sum('amount');

        // Get the sum of amounts for pending deposits
        $sumOfPendingDeposits = auth()->user()->deposits()->where('status', 'pending')->sum('amount');

        return view('dashboard.transaction', compact('totalDeposits', 'sumOfApprovedDeposits', 'sumOfPendingDeposits','userWithdrawals',));
        // return view('dashboard.transaction');
    }

    public  function refferal(){
        $user = Auth::user();

        // Get the users referred by the current user
        $referredUsers = $user->referredUsers->load('deposits');
        $totalDeposits = auth()->user()->deposits()->sum('amount');
        // Get the sum of amounts for approved deposits
        $sumOfApprovedDeposits = auth()->user()->deposits()->where('status', 'approved')->sum('amount');

        // Get the sum of amounts for pending deposits
        $sumOfPendingDeposits = auth()->user()->deposits()->where('status', 'pending')->sum('amount');

        return view('dashboard.refferal', compact('totalDeposits', 'sumOfApprovedDeposits', 'sumOfPendingDeposits','referredUsers'));
        // return view('dashboard.refferal');
    }

    public  function ticket(){
        $user = Auth::user();

        // Fetch all tickets submitted by the logged-in user
        $userTickets = $user->tickets;
        $totalDeposits = auth()->user()->deposits()->sum('amount');
        // Get the sum of amounts for approved deposits
        $sumOfApprovedDeposits = auth()->user()->deposits()->where('status', 'approved')->sum('amount');

        // Get the sum of amounts for pending deposits
        $sumOfPendingDeposits = auth()->user()->deposits()->where('status', 'pending')->sum('amount');

        return view('dashboard.ticket', compact('totalDeposits', 'sumOfApprovedDeposits', 'sumOfPendingDeposits','userTickets'));
        // return view('dashboard.ticket');
    }



    public  function ticket_new(){

          // Get the logged-in user
          $user = Auth::user();
          $totalDeposits = auth()->user()->deposits()->sum('amount');
          // Get the sum of amounts for approved deposits
          $sumOfApprovedDeposits = auth()->user()->deposits()->where('status', 'approved')->sum('amount');

          // Get the sum of amounts for pending deposits
          $sumOfPendingDeposits = auth()->user()->deposits()->where('status', 'pending')->sum('amount');

          return view('dashboard.ticket_new', compact('totalDeposits', 'sumOfApprovedDeposits', 'sumOfPendingDeposits','user'));

          // Show the form to create a new ticket
        //   return view('tickets.create', compact('user'));
        // return view('dashboard.ticket_new', compact('user'));
    }

    public  function fa(){

        $totalDeposits = auth()->user()->deposits()->sum('amount');
        // Get the sum of amounts for approved deposits
        $sumOfApprovedDeposits = auth()->user()->deposits()->where('status', 'approved')->sum('amount');

        // Get the sum of amounts for pending deposits
        $sumOfPendingDeposits = auth()->user()->deposits()->where('status', 'pending')->sum('amount');

        return view('dashboard.fa', compact('totalDeposits', 'sumOfApprovedDeposits', 'sumOfPendingDeposits'));
        // return view('dashboard.fa');
    }


    public function profile()
{
    // Fetch user details
    $user = auth()->user();

    $totalDeposits = auth()->user()->deposits()->sum('amount');
    // Get the sum of amounts for approved deposits
    $sumOfApprovedDeposits = auth()->user()->deposits()->where('status', 'approved')->sum('amount');

    // Get the sum of amounts for pending deposits
    $sumOfPendingDeposits = auth()->user()->deposits()->where('status', 'pending')->sum('amount');

    return view('dashboard.profile', compact('totalDeposits', 'sumOfApprovedDeposits', 'sumOfPendingDeposits','user'));
    // Pass user details to the view
    // return view('dashboard.profile', ['user' => $user]);
}


    public  function password(){
        $totalDeposits = auth()->user()->deposits()->sum('amount');
        // Get the sum of amounts for approved deposits
        $sumOfApprovedDeposits = auth()->user()->deposits()->where('status', 'approved')->sum('amount');

        // Get the sum of amounts for pending deposits
        $sumOfPendingDeposits = auth()->user()->deposits()->where('status', 'pending')->sum('amount');

        return view('dashboard.password', compact('totalDeposits', 'sumOfApprovedDeposits', 'sumOfPendingDeposits'));
        // return view('dashboard.password');
    }
    public  function invest(){
        return view('dashboard.invest');
    }





    public function users(Request $request)
    {
        // Validate the input data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'referred_by' => 'nullable|string|max:255',
            'country' => 'required|string|max:255',
            'mobile' => 'required|string|max:15',
        ]);

        // Add a random referral link
        $validatedData['referral_link'] = \Illuminate\Support\Str::uuid()->toString();

        // Create a new user
        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'referral_link' => $validatedData['referral_link'],
            'referred_by' => $validatedData['referred_by'],
            'country' => $validatedData['country'],
            'mobile' => $validatedData['mobile'],
        ]);

        // Redirect to the dashboard
        return redirect('/');
    }
}
