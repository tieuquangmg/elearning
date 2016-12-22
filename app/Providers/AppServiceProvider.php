<?php

namespace App\Providers;

use App\Modules\Media\Models\Message;
use App\Modules\Media\Models\Notify;
use App\Modules\Media\Models\User_notify;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot(){
//        view()->composer('frontend/dasdboard/_modules/nav',function ($view){
//            $data['notify'] = User_notify::with('notify')->where('user_id',Auth::user()->id)->get();
//            $data['message'] = Message::with('send_from')->where('to',Auth::user()->id)->take(10)->get();
//            $view->with($data);
//        });
        view()->composer('frontend/dasdboard/_modules/nav_db',function ($view){
            $data['notify'] = User_notify::with('notify')->where('user_id',Auth::user()->id)->get();
//            dd( $data['notify']);
            $data['message'] = Message::with('send_from')->where('to',Auth::user()->id)->take(10)->get();
            $view->with($data);
        });
        Carbon::setLocale(config('app.locale'));
    }
    public function register(){

    }
}