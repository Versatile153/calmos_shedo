<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Deposit;

class TransferController extends Controller
{
    public function transfer(Request $request)
    {
        // Get sender and recipient user IDs
        $senderId = auth()->id(); // Assuming you're using Laravel's built-in authentication
        $recipientId = $request->input('recipient_id'); // Adjust the input field name as needed

        // Get transfer amount from the request
        $transferAmount = $request->input('amount');
        // Retrieve all deposits for the sender, ordered by amount in descending order
        $senderDeposits = Deposit::where('user_id', $senderId)
    ->where('status', 'approved') // Add this condition
    ->orderBy('amount', 'desc')
    ->get();


        // Calculate the total amount of the sender's deposits
        $totalSenderAmount = $senderDeposits->sum('amount');
        // dd($totalSenderAmount);

        // Check if the sender has sufficient fund
        if ($totalSenderAmount >= $transferAmount) {

            // Iterate through deposits and decrement the transfer amount until it's covered
            foreach ($senderDeposits as $deposit) {
                $remainingAmount = $transferAmount - $deposit->amount;
                // $totalSenderAmount=    $totalSenderAmount-$transferAmount;



                if ($remainingAmount >= 0) {
                    // If the deposit amount is not enough, deduct the full amount and continue
                    $deposit->decrement('amount', $deposit->amount);


                } else {
                    // If the deposit amount is more than enough, deduct the remaining amount and break
                    $deposit->decrement('amount', $transferAmount);
                    break;
                }
            }

            // Update recipient's deposit
            $recipientDeposit = Deposit::where('user_id', $recipientId)->firstOrFail();
            $recipientDeposit->increment('amount', $transferAmount);
            // dd($recipientDeposit);

            // Save changes within a transaction
            DB::transaction(function () use ($senderDeposits, $recipientDeposit) {
                foreach ($senderDeposits as $deposit) {
                    $deposit->save();
                }
                $recipientDeposit->save();
            });

            // Transaction successful
            return response()->json(['message' => 'Transfer successful']);
        } else {
            // Insufficient funds
            return response()->json(['error' => 'Insufficient funds']);
        }
    }
}
