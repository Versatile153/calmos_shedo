<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
            try {
                \DB::beginTransaction();

                \App\Models\Invest::where('status', 'approved')
                    ->where('amount', '>=', 300)
                    ->where('amount', '<=', 4999)
                    ->update([
                        'profits' => \DB::raw('profits + (amount * 0.015)'),
                    ]);

                \App\Models\Invest::where('status', 'approved')
                    ->where('amount', '>=', 5000)
                    ->where('amount', '<=', 19999)
                    ->update([
                        'profits' => \DB::raw('profits + (amount * 0.025)'),
                    ]);

                \App\Models\Invest::where('status', 'approved')
                    ->where('amount', '>=', 20000)
                    ->where('amount', '<=', 49999)
                    ->update([
                        'profits' => \DB::raw('profits + (amount * 0.03)'),
                    ]);

                \App\Models\Invest::where('status', 'approved')
                    ->where('amount', '>=', 50000)
                    ->where('amount', '<=', 1000000)
                    ->update([
                        'profits' => \DB::raw('profits + (amount * 0.04)'),
                    ]);

                \DB::commit();
                \Log::info('Profits updated successfully based on different amounts ranges for approved investments.');
            } catch (\Exception $e) {
                \DB::rollBack();
                \Log::error('Error updating profits: ' . $e->getMessage());
            }
        })->everyMinute();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');

    }

    protected $commands = [
        // ...
        \App\Console\Commands\UpdateProfits::class,
    ];

}
