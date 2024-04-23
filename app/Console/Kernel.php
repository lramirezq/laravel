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
      
        $schedule->command('app:get-received-document')->everyThreeMinutes();
        $schedule->command('app:download-xml')->everyThreeMinutes();
        $schedule->command('app:download-pdf ')->everyThreeMinutes();
        $schedule->command('app:copy-to-sftp')->everyThreeMinutes();
        $schedule->command('app:confirm-go-socket')->everyThreeMinutes();
 
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
