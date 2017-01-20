<?php

namespace App\Http\ViewComposers;
use App\Modules\Exercise\Models\Exercise;
use App\Modules\Media\Models\Message;
use App\Modules\Media\Models\User_notify;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class NotifyComposer
{
    protected $exercise;
    public function __construct(){
//        dd(Auth::guard('nguoidung'));
//        $this->exercise = new Exercise();
    }
    public function compose(View $view){
        if(Auth::guard('nguoidung')->check()){
            $notify = User_notify::where('user_id', Auth::guard('nguoidung')->user()->id)->take(5)->get();
            $message = Message::where('to', Auth::guard('nguoidung')->user()->id)->orderBy('created_at','DESC')->take(5)->get();
        }else{
            $notify = User_notify::where('user_id', Auth::user()->id)->take(5)->get();
            $message = Message::where('to', Auth::user()->id)->orderBy('created_at','DESC')->take(5)->get();
        };
        $view->with('notify',$notify)->with('message',$message);
    }
//    public function compose(View $view){
//        if(Auth::guard('nguoidung')->check()){
//            $notify = User_notify::with('notify')->where('user_id', Auth::guard('nguoidung')->user()->id)->take(5)->get();
//            $message = Message::with('send_from')->where('to', Auth::guard('nguoidung')->user()->id)->take(5)->get();
//        }else{
//            $notify = User_notify::with('notify')->where('user_id', Auth::user()->id)->take(5)->get();
//            $message = Message::with('send_from')->where('to', Auth::user()->id)->take(5)->get();
//        };
//        $view->with('notify',$notify)->with('message',$message);
//    }
}