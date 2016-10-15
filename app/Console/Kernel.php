<?php

namespace App\Console;

use App\Console\Commands\ModuleModel;
use App\Console\Commands\ModuleRequest;
use App\Console\Commands\SendChatMessage;
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
        Commands\Inspire::class,
        Commands\Module::class,
        Commands\Random::class,
        Commands\ModuleController::class,
        Commands\ModuleRepository::class,
        Commands\ModulePolicy::class,
        Commands\ModuleProvider::class,
        ModuleModel::class,
        ModuleRequest::class
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
//         $schedule->command('inspire')
//                  ->hourly();
//        $schedule->command('module')
//                  ->hourly();
//        $schedule->command('random')
//                  ->hourly();
    }
}
