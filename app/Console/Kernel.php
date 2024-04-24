<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
      
        $schedule->command('app:get-received-document')->everyFiveMinutes();
        $schedule->command('app:download-xml')->everyFiveMinutes();
        $schedule->command('app:download-pdf ')->everyFiveMinutes();
        $schedule->command('app:copy-to-sftp')->everyFifteenMinutes();
        $schedule->command('app:confirm-go-socket')->everyFifteenMinutes();
 
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
