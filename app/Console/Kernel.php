<?php

namespace App\Console;
use App\Admin;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        Commands\UpdatePrice::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('price:cron')->everyMinute();
        /*$schedule->call(function(){
            Admin::create([
                'name' => "Demoasas",
                'email' => "demo@admin.comasasa",
                'password' => "demasaso",
                'gender' => "demasasao",
                'profile_img' => "deasasasmo",
                'status' => '1',
            ]);
        })->everyMinute();*/
        // $schedule->command('inspire')->hourly();
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
