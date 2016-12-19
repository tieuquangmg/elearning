<?php
namespace App\Modules\Auth\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Auth\Repositories\UserRepository;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use App\Modules\Auth\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Excel;
use Validator;
use Config;

class UserController extends Controller
{
    protected $repository, $input;

    public function __construct(UserRepository $repository)
    {
//        $this->middleware(['permission:manager_user']);
        parent::__construct();
        $this->repository = $repository;
        $this->input = Input::all();
    }

    public function postQrCode()
    {
        $sdt = Input::get('sdt');
        $user = User::where('phone_number', $sdt)->first();
        if ($user) {
            Auth::loginUsingId($user->id);
            return response()->json($user);
        } else return response()->json(false);
    }

    public function getProfile()
    {
        return view('auth.user.profile');
    }

    public function getData(Request $request)
    {
        $url = $request->url();
        $value = $request->s;
        $perpage = $request->f_select_number;
        Input::flash();
        $data['users'] = $this->repository->data('email', $value, $perpage, $url);
        return view('auth.user.data', $data);
    }

    public function getDelete()
    {
        return $this->repository->delete($this->input);
    }

    public function getAdd()
    {
        return view('auth.user.create');
    }

    public function postCreate()
    {
        $this->repository->create($this->input);
        return redirect()->route('auth.user.data')->withSuccess(trans('message.create_success'));
    }

    public function getEdit($id)
    {
        $user = $this->repository->find($id);
        return view('auth.user.update', compact('user'));
    }

    public function postUpdate()
    {
        $this->repository->update($this->input);
        return redirect()->route('auth.user.data')->withSuccess(trans('message.update_success'));
    }

    public function getActive($id)
    {
        $active = $this->repository->find($id);
        $active->active *= -1;
        $this->repository->update($active);
    }

    public function getImport()
    {
        return view('auth.user.import');
    }

    public function postImport()
    {
       $validate = Validator::make($this->input, [
            'excel' => 'required'
        ]);
        if($validate->fails()){
            return redirect('user/import')
                ->withErrors($validate)
                ->withInput();
        }
        Excel::load($this->input['excel'], function ($reader) {
            $reader->each(function ($sheet) {
                $array = $sheet->toArray();
                $array['password'] = Hash::make($array['password']);
                User::firstOrCreate($array);
            });
        });
        return redirect()->route('auth.user.data');
    }

    public function getExport()
    {
        $export = User::all()->toArray();
        Excel::create('sinhvien', function ($excel) use ($export) {
            $excel->sheet('sheet1 ', function ($sheet) use ($export) {
                $sheet->fromArray($export);
            });
        })->export('xls');
    }
    public function getSyncForums(){
        $host = Config::get('xenforo.host');
        $client = new Client(['base_uri' => 'http://localhost/xf/']);

        $user = User::all()->take(100);
        foreach ($user as $row){
            $context = stream_context_create(array(
                'http' => array('ignore_errors' => true),
            ));

            $result = file_get_contents('http://localhost/xf/api.php?action=register&hash=quangquang&username=1477011&password=123456&email=1477011@edu.vn', false, $context);
            dd(json_decode($result,true));
            $response = $client->request('GET', 'api.php',[
                'query'=>[
                    'action' => 'register',
                    'hash' => 'quangquang',
                    'username'=>$row->code,
                    'password'=>'123456',
                    'email'=>$row->code.'@edu.vn'
                ]]);
            dump($response);
//            var_dump(collect(json_decode($response->getBody()->getContents(),true)));
        }
    }
}
