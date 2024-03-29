<?php

namespace App\Console;

use App\Jobs\DeleteOldestInsertJob;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Jobs\GetDataTable;
use App\Jobs\InsertDataJob;

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
        // $schedule->job(new GetDataTable)->everyMinute();
        $schedule->job(new InsertDataJob)->timezone('America/Tijuana')->everyMinute();
<<<<<<< HEAD
        // $schedule->job(new DeleteOldestInsertJob)->timezone('America/Tijuana')->everyMinute();
=======
>>>>>>> a94ea32d4c556ebbc441fe564e2c02169848df14
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
