<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Invest;

class UpdateProfits extends Command
{
    protected $signature = 'update:profits';

    protected $description = 'Update profits in the invests table';

    public function handle()
{
    try {
        \DB::beginTransaction();

        Invest::where('amount', 20000)->update([
            'profits' => \DB::raw('profits + (amount * 0.05)'),
        ]);

        \DB::commit();
        $this->info('Profits updated successfully based on 5% of the amount for rows with amount 20000.');
    } catch (\Exception $e) {
        \DB::rollBack();
        \Log::error('Error updating profits: ' . $e->getMessage());
        $this->error('Error updating profits. Check the logs for details.');
    }


}

}
