<?php
namespace App\Http\Controllers\Nguoidung;
//use App\Http\Requests\Request;
use App\Models\STU_DanhSach;
use App\Models\STU_HoSoSinhVien;
use Illuminate\Http\Request;
use App\Models\SYS_NguoiDung;
use Validator;
use Auth;
use Session;
use Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */
    use AuthenticatesAndRegistersUsers, ThrottlesLogins;
    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = 'sinhvien';
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'UserName' => 'required|max:255',
            'Email' => 'required|email|max:255|unique:users',
            'PassWord' => 'required|min:6|confirmed',
            'g-recaptcha-response' => 'required|recaptcha',
        ]);
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data){
//        return SYS_NguoiDung::create([
//            'name' => $data['name'],
//            'email' => $data['email'],
//            'password' => bcrypt($data['password']),
//        ]);
    }
    public function getLogin(){
        return view('auth/nguoidung/login');
    }

    public function Postlogin(Request $request){
        $rules = array(
            'username' => 'required|min:1',
            'password' => 'required|min:1'
        );
        $validator = Validator::make($request->all(), $rules);
        if (!$validator->fails()) {
            $stu_code = $request->get('username');

            $student = STU_HoSoSinhVien::where('Ma_sv', '=', $request->get('username'));
            if($student->count()) {
                $student = $student->first();
                $danh_sach = STU_DanhSach::find($student->ID_sv);
                if(1151001 == $danh_sach->Mat_khau) {
//                if(md5($request->get('password') == $danh_sach)) {
                    if($danh_sach->Active == 1){
//                        Auth::login($student);
                        $current_student = array(
                            'id' =>$danh_sach->ID_sv,
                            'name' => $student->Ho_ten
                        );
                        Session::flush();
                        Session::put('users', $current_student);
                        Session::put('history_url', 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
                        return Redirect::intended('study/mycourse');

                    }
                    return Redirect::to('/')->withInput()->with('error', 'Tài khoản chưa được kích hoạt');
                }
                else {
                    return Redirect::to('/')->withInput()->with('error', 'Tài khoản không đúng');
                }
            }
            return Redirect::to('/')->withInput()->with('error', 'Tài khoản không tồn tại');

        }
        return Redirect::to('/')->withInput()->with('error', 'inputs');

    }
}
