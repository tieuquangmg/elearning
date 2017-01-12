<?php

namespace App\Providers;

use App\Modules\Media\Models\Message;
use App\Modules\Media\Models\User_notify;
use Auth, View;
use Illuminate\Support\ServiceProvider;
use App\Http\ViewComposers\ExerciseComposer;
use App\Http\ViewComposers\ListTestComposer;
class ComposerProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        dd(Auth::user());
        view()->composer('frontend.nguoidung._modules.nav_db', ExerciseComposer::class);
        view()->composer(['edu.test.detail', 'lesson.theory.texts.data', 'exercise._include.exercise'], ListTestComposer::class);
        if (Auth::guard('nguoidung')->check()){
//            dd(1);
            View()->composer('frontend/nguoidung/_modules/nav_db', function ($view) {
                $data['notify'] = User_notify::with('notify')->where('user_id', Auth::guard('nguoidung')->user()->id)->take(5)->get();
//            dd( $data['notify']);
                $data['message'] = Message::with('send_from')->where('to', Auth::guard('nguoidung')->user()->id)->take(5)->get();
                $view->with($data);
            });
        }else {
//            dd(2);
            View()->composer('frontend/dasdboard/_modules/nav_db', function ($view) {
                $data['notify'] = User_notify::with('notify')->where('user_id', Auth::user()->id)->take(5)->get();
//            dd( $data['notify']);
                $data['message'] = Message::with('send_from')->where('to', Auth::user()->id)->take(5)->get();
                $view->with($data);
            });
        }
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
