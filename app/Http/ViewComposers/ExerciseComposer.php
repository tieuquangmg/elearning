<?php
/**
 * Created by PhpStorm.
 * User: FightLightDiamond
 * Date: 5/9/2016
 * Time: 11:08 AM
 */

namespace App\Http\ViewComposers;
use App\Modules\Exercise\Models\Exercise;
use App\Modules\Media\Models\Message;
use App\Modules\Media\Models\User_notify;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class ExerciseComposer
{
    protected $exercise;
    public function __construct(){
//        dd(Auth::guard('nguoidung'));
//        $this->exercise = new Exercise();
    }
    public function compose(View $view){
//        dd(Auth::guard('nguoidung')->check());
        $notify = User_notify::with('notify')->where('user_id', Auth::guard('nguoidung')->user()->id)->take(5)->get();
        $message = Message::with('send_from')->where('to', Auth::guard('nguoidung')->user()->id)->take(5)->get();
        $view->with('notify',$notify)->with('message',$message);
    }
}