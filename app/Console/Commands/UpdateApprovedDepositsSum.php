<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Deposit;

class UpdateApprovedDepositsSum extends Command
{
    protected $signature = 'update:approved-deposits-sum';

    protected $description = 'Update the sum column for approved deposits in the deposits table';

    public function handle()
    {
        $this->info('Updating sum column for approved deposits in deposits table...');

        // Get the sum of approved deposits for each user and update the 'sum' column
        Deposit::selectRaw('user_id, sum(amount) as total_approved_amount')
            ->where('status', 'approved')
            ->groupBy('user_id')
            ->get()
            ->each(function ($deposit) {
                Deposit::where('user_id', $deposit->user_id)
                    ->update(['sum' => $deposit->total_approved_amount]);
            });

        $this->info('Sum column for approved deposits in deposits table updated successfully.');
    }
}
