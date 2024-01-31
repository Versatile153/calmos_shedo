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

                \App\Models\Invest::query()->update([
                    'profits' => \DB::raw('profits * 1.10'),
                ]);

                \DB::commit();
                \Log::info('Profits updated successfully.');
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
