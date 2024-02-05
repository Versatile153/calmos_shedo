<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Invest;

class UpdateInvestsSum extends Command
{
    protected $signature = 'update:invests-sum';

    protected $description = 'Update the sum column in the invests table for each user';

    public function handle()
    {
        try {
            \DB::beginTransaction();

            // Get distinct user IDs from the invests table
            $userIds = Invest::distinct()->pluck('user_id');

            // Iterate through each user and update the 'sum' column
            foreach ($userIds as $userId) {
                $userSum = Invest::where('user_id', $userId)->sum('profits');

                // Find or create the user record and update the 'sum' column
                Invest::updateOrCreate(
                    ['user_id' => $userId],
                    ['sum' => $userSum]
                );
            }

            \DB::commit();
            $this->info('Sum column updated successfully for each user.');
        } catch (\Exception $e) {
            \DB::rollBack();
            \Log::error('Error updating sum column: ' . $e->getMessage());
            $this->error('Error updating sum column. Check the logs for details.');
        }
    }
}
