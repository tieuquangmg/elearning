<?php

namespace App\Providers;

use App\Modules\Media\Models\Message;
use App\Modules\Media\Models\User_notify;
use Auth, View;
use Illuminate\Support\ServiceProvider;
use App\Http\ViewComposers\NotifyComposer;
use App\Http\ViewComposers\ListTestComposer;
class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('frontend.nguoidung._modules.nav_db', NotifyComposer::class);
        view()->composer('frontend.dasdboard._modules.nav_db', NotifyComposer::class);
//        view()->composer(['edu.test.detail', 'lesson.theory.texts.data', 'exercise._include.exercise'], ListTestComposer::class);
    }
    public function register()
    {

    }
}