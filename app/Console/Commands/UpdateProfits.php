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

        Invest::query()->update([
            'profits' => \DB::raw('profits * 1.10'),
        ]);

        \DB::commit();
        $this->info('Profits updated successfully.');
    } catch (\Exception $e) {
        \DB::rollBack();
        \Log::error('Error updating profits: ' . $e->getMessage());
        $this->error('Error updating profits. Check the logs for details.');
    }
}

}
