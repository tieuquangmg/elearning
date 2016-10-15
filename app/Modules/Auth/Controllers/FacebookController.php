<?php 
namespace App\Modules\Auth\Controllers; 
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Modules\Auth\Models\User;
class FacebookController extends Controller
{
    public function getFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function getCallback(){
        try {
            $user = Socialite::with('facebook')->user();
            //dd($user);
        } catch (\Exception $e) {
            dd($e);
            return redirect()->route('home');
        }
        if(Auth::attempt(['email' => $user-> email, 'password' => $user->id])){
            return redirect()->route('admin');
        }else{
            $this->postSignUp($user);
        }
        return redirect()->route('admin');
    }
    public function postSignUp($input){
        $user = new User();
        $user->email = $input->email;
        $user-> first_name = strstr($input->name, ' ');
        $user-> last_name = str_replace($user-> first_name, '', $input->name);
        $user->password = bcrypt($input->id);
        $user->save();
        Auth::attempt(['email' => $user-> email, 'password' => $input->id]);
    }
}
