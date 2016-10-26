<?php

namespace App\Providers;

use App\Modules\Media\Models\Message;
use App\Modules\Media\Models\Notify;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('frontend/dasdboard/_modules/nav',function ($view){
            $data['notify'] = Notify::with('sender')->get();
            $data['message'] = Message::with('send_from')->where('to',Auth::user()->id)->take(10)->get();
            $view->with($data);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }
}
