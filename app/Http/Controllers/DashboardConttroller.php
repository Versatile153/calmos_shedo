<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\Invest;
// use Illuminate\Http\Request;




class DashboardConttroller extends Controller
{

    public  function deposit(){

        $sumOfInterestInvest = auth()->user()->invests()->where('status', 'approved')->sum('profits');
        $totalDeposits = auth()->user()->deposits()->sum('amount');
        // Get the sum of amounts for approved deposits
        $sumOfApprovedDeposits = auth()->user()->deposits()->where('status', 'approved')->sum('amount');

        // Get the sum of amounts for pending deposits
        $sumOfPendingDeposits = auth()->user()->deposits()->where('status', 'pending')->sum('amount');

        return view('dashboard.deposit', compact('totalDeposits', 'sumOfApprovedDeposits', 'sumOfPendingDeposits','sumOfInterestInvest'));
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
        $sumOfInterestInvest = auth()->user()->invests()->where('status', 'approved')->sum('profits');

        return view('dashboard.withdraw', compact('totalDeposits', 'sumOfApprovedDeposits', 'sumOfPendingDeposits','user','totalProfits','sumOfInterestInvest'));
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

        $sumOfInterestInvest = auth()->user()->invests()->where('status', 'approved')->sum('profits');

        $activeInvestments = $user->invests()->where('status', 'approved')->get();
        $totalProfits = $user->invests()->sum('profits');



        $investments = $user->invests;

    return view('dashboard.investment', [
        'pendingSum' => $pendingSum,
        'approvedSum' => $approvedSum,
        'sumOfApprovedDeposits' => $sumOfApprovedDeposits,
        'investments' => $investments,
        'activeInvestments' => $activeInvestments,
        'totalProfits' => $totalProfits,
        'sumOfInterestInvest' => $sumOfInterestInvest,


    ]);
}


    public  function transfer(){
        $totalDeposits = auth()->user()->deposits()->sum('amount');
        // Get the sum of amounts for approved deposits
        $sumOfApprovedDeposits = auth()->user()->deposits()->where('status', 'approved')->sum('amount');
        $sumOfApprovedInvestment = auth()->user()->invests()->where('status', 'approved')->sum('amount');

        // Get the sum of amounts for pending deposits
        $sumOfPendingDeposits = auth()->user()->deposits()->where('status', 'pending')->sum('amount');

        $sumOfInterestInvest = auth()->user()->invests()->where('status', 'approved')->sum('profits');
        return view('dashboard.transfer', compact('totalDeposits', 'sumOfApprovedDeposits', 'sumOfPendingDeposits','sumOfApprovedInvestment','sumOfInterestInvest'));
        // return view('dashboard.transfer');
    }

    public  function transaction(){
        $user = Auth::user();


        $userWithdrawals = $user->withdraws;
        $totalProfits = $user->invests()->sum('profits');


        $totalDeposits = auth()->user()->deposits()->sum('amount');

        $sumOfApprovedDeposits = auth()->user()->deposits()->where('status', 'approved')->sum('amount');


        $sumOfPendingDeposits = auth()->user()->deposits()->where('status', 'pending')->sum('amount');

        $sumOfInterestInvest = auth()->user()->invests()->where('status', 'approved')->sum('profits');
        return view('dashboard.transaction', compact('totalDeposits', 'sumOfApprovedDeposits', 'sumOfPendingDeposits','userWithdrawals','sumOfInterestInvest'));

    }

    public  function refferal(){
        $user = Auth::user();
        $bonusSum = DB::table('users')->where('id', $user->id)->sum('bonus');
        $referredUsers = $user->referredUsers->load('deposits');

        foreach ($referredUsers as $referredUser) {
            foreach ($referredUser->deposits->where('status', 'approved') as $deposit) {
                $bonusAmount = $deposit->amount * 0.05;

                $referrers = User::where('referral_link', $referredUser->referred_by)->get();

                // Update the bonus column for each referrer only if the bonus is 0
                foreach ($referrers as $referrer) {
                    if ($referrer->bonus == 0) {
                        $referrer->bonus = $bonusAmount;
                        $referrer->save(); // Save each referrer individually
                    }
                }
            }
        }














        $totalDeposits = auth()->user()->deposits()->sum('amount');

        $sumOfApprovedDeposits = auth()->user()->deposits()->where('status', 'approved')->sum('amount');

        // Get the sum of amounts for pending deposits
        $sumOfPendingDeposits = auth()->user()->deposits()->where('status', 'pending')->sum('amount');
        $sumOfInterestInvest = auth()->user()->invests()->where('status', 'approved')->sum('profits');

        return view('dashboard.refferal', compact('totalDeposits', 'sumOfApprovedDeposits', 'sumOfPendingDeposits','referredUsers','bonusSum','sumOfInterestInvest'));
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

        $sumOfInterestInvest = auth()->user()->invests()->where('status', 'approved')->sum('profits');
        return view('dashboard.ticket', compact('totalDeposits', 'sumOfApprovedDeposits', 'sumOfPendingDeposits','userTickets','sumOfInterestInvest'));
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
          $sumOfInterestInvest = auth()->user()->invests()->where('status', 'approved')->sum('profits');

          return view('dashboard.ticket_new', compact('totalDeposits', 'sumOfApprovedDeposits', 'sumOfPendingDeposits','user','sumOfInterestInvest'));

    }

    public  function fa(){



        $totalDeposits = auth()->user()->deposits()->sum('amount');
        // Get the sum of amounts for approved deposits
        $sumOfApprovedDeposits = auth()->user()->deposits()->where('status', 'approved')->sum('amount');

        // Get the sum of amounts for pending deposits
        $sumOfPendingDeposits = auth()->user()->deposits()->where('status', 'pending')->sum('amount');
        $sumOfInterestInvest = auth()->user()->invests()->where('status', 'approved')->sum('profits');


        $user = auth()->user();

        // Check if two-factor authentication is enabled for the user
        if ($user->two_factor_secret) {
            // Generate a QR code for 2FA
            $qrCode = QrCode::size(300)->generate('otpauth://totp/YourApp:' . $user->email . '?secret=' . $user->two_factor_secret);

            // dd($qrCode);
            // Pass $qrCode to your view

        return view('dashboard.fa', compact('totalDeposits', 'sumOfApprovedDeposits', 'sumOfPendingDeposits','qrCode','sumOfInterestInvest'));
            // return view('dashboard', compact('qrCode'));
        }

        // If 2FA is not enabled, you can handle it accordingly

        return view('dashboard.fa', compact('totalDeposits', 'sumOfApprovedDeposits', 'sumOfPendingDeposits','sumOfInterestInvest'));




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

    $sumOfInterestInvest = auth()->user()->invests()->where('status', 'approved')->sum('profits');
    return view('dashboard.profile', compact('totalDeposits', 'sumOfApprovedDeposits', 'sumOfPendingDeposits','user','sumOfInterestInvest'));
    // Pass user details to the view
    // return view('dashboard.profile', ['user' => $user]);
}


    public  function password(){
        $totalDeposits = auth()->user()->deposits()->sum('amount');
        // Get the sum of amounts for approved deposits
        $sumOfApprovedDeposits = auth()->user()->deposits()->where('status', 'approved')->sum('amount');

        // Get the sum of amounts for pending deposits
        $sumOfPendingDeposits = auth()->user()->deposits()->where('status', 'pending')->sum('amount');
        $sumOfInterestInvest = auth()->user()->invests()->where('status', 'approved')->sum('profits');
        return view('dashboard.password', compact('totalDeposits', 'sumOfApprovedDeposits', 'sumOfPendingDeposits','sumOfInterestInvest'));
        // return view('dashboard.password');
    }
    public  function invest(){

        $user = Auth::user();
        $totalDeposits = auth()->user()->deposits()->sum('amount');
        // Get the sum of amounts for approved deposits
        $sumOfApprovedDeposits = auth()->user()->deposits()->where('status', 'approved')->sum('amount');
        $totalProfits = $user->invests()->sum('profits');

        // Get the sum of amounts for pending deposits
        $sumOfPendingDeposits = auth()->user()->deposits()->where('status', 'pending')->sum('amount');
        $sumOfInterestInvest = auth()->user()->invests()->where('status', 'approved')->sum('profits');

        return view('dashboard.invest', compact('totalDeposits', 'sumOfApprovedDeposits', 'sumOfPendingDeposits','user','totalProfits','sumOfInterestInvest'));
        // return view('dashboard.invest');
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












    public  function promotion(){
        $totalDeposits = auth()->user()->deposits()->sum('amount');
        // Get the sum of amounts for approved deposits
        $sumOfApprovedDeposits = auth()->user()->deposits()->where('status', 'approved')->sum('amount');

        // Get the sum of amounts for pending deposits
        $sumOfPendingDeposits = auth()->user()->deposits()->where('status', 'pending')->sum('amount');

        $sumOfInterestInvest = auth()->user()->invests()->where('status', 'approved')->sum('profits');

        return view('dashboard.promotion', compact('totalDeposits', 'sumOfApprovedDeposits', 'sumOfPendingDeposits','sumOfInterestInvest'));
        // return view('dashboard.transfer');
    }


    public  function kyc(){


        $totalDeposits = auth()->user()->deposits()->sum('amount');
        // Get the sum of amounts for approved deposits
        $sumOfApprovedDeposits = auth()->user()->deposits()->where('status', 'approved')->sum('amount');

        // Get the sum of amounts for pending deposits
        $sumOfPendingDeposits = auth()->user()->deposits()->where('status', 'pending')->sum('amount');
        $sumOfInterestInvest = auth()->user()->invests()->where('status', 'approved')->sum('profits');
        return view('dashboard.kyc', compact('totalDeposits', 'sumOfApprovedDeposits', 'sumOfPendingDeposits','sumOfInterestInvest'));
        // return view('dashboard.deposit');
    }








    public  function admin(){




        return view('dashboard.admin');
        // return view('dashboard.deposit');
    }


 
}
