<?php

// app/Http/Controllers/AdminController.php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Deposit;
use App\Models\Invest;
use App\Models\Kyc;
use App\Models\Withdraw;



use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function deposits()
    {
        // Fetch all users
        $users = User::all();

        // Fetch deposits for each user
        $usersWithDeposits = [];
        foreach ($users as $user) {
            $deposits = Deposit::where('user_id', $user->id)->get();
            $usersWithDeposits[] = [
                'user' => $user,
                'deposits' => $deposits,
            ];
        }

        return view('admin.deposits', compact('usersWithDeposits'));
    }









    public function withdrawals()
    {
        // Fetch all users
        $users = User::all();

        // Fetch deposits for each user
        $usersWithDeposits = [];
        foreach ($users as $user) {
            $deposits = Withdraw::where('user_id', $user->id)->get();
            $usersWithDeposits[] = [
                'user' => $user,
                'deposits' => $deposits,
            ];
        }

        return view('admin.withdrawals', compact('usersWithDeposits'));
    }







    public function updateDepositStatus($id)
{
    $deposit = Deposit::findOrFail($id);

    // Toggle the status (change 'approved' to 'rejected' and vice versa)
    $deposit->status = ($deposit->status == 'approved') ? 'pending' : 'approved';
    $deposit->save();

    return redirect()->back()->with('success', 'Deposit status updated successfully.');
}


public function updateDepositStatus1($id)
{
    $deposit = Invest::findOrFail($id);

    // Toggle the status (change 'approved' to 'rejected' and vice versa)
    $deposit->status = ($deposit->status == 'approved') ? 'pending' : 'approved';
    $deposit->save();

    return redirect()->back()->with('success', 'Deposit status updated successfully.');
}

public function updateDepositStatus2($id)
{
    $deposit = User::findOrFail($id);


    $deposit->verified = ($deposit->verified == 1) ? 0 : 1;
    $deposit->save();

    return redirect()->back()->with('success', 'Deposit status updated successfully.');
}


public function updateDepositStatus3($id)
{
    $deposit = Withdraw::findOrFail($id);

    // Toggle the status (change 'approved' to 'rejected' and vice versa)
    $deposit->status = ($deposit->status == 'paid') ? 'pending' : 'paid';
    $deposit->save();

    return redirect()->back()->with('success', 'Deposit status updated successfully.');
}









public function invests()
{
    $users = User::all();

    // Fetch deposits for each user
    $usersWithDeposits = [];
    foreach ($users as $user) {
        $deposits = Invest::where('user_id', $user->id)->get();
        $usersWithDeposits[] = [
            'user' => $user,
            'deposits' => $deposits,
        ];
    }

    return view('admin.invests', compact('usersWithDeposits'));


    // return view('admin.invests');
}







public function userkyc()
{
    $users = User::all();

    // Fetch deposits for each user
    $usersWithDeposits = [];
    foreach ($users as $user) {
        $deposits = Kyc::where('user_id', $user->id)->get();
        $usersWithDeposits[] = [
            'user' => $user,
            'deposits' => $deposits,
        ];
    }

    return view('admin.kycs', compact('usersWithDeposits'));


    // return view('admin.invests');
}



}
