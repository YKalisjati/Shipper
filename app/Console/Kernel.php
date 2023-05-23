<?php

namespace App\Console;

use App\Models\reset_password;
use App\Models\user_verify;
use Carbon\Carbon;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(static function () {
            reset_password::where('updated_at', '<', Carbon::now()->subMinutes(2))->delete();
            user_verify::where('updated_at', '<', Carbon::now()->subHours(1))->delete();
        })->everyMinute();
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
