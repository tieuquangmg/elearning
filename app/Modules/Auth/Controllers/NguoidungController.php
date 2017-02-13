<?php

namespace App\Modules\Auth\Controllers;
use App\Http\Controllers\Controller;

use App\Modules\Auth\Repositories\NguoidungRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use App\Http\Requests;
use Excel;
use Validator;
use Config;

class NguoidungController extends Controller
{
    protected $repository, $input;
    public function __construct(NguoidungRepository $repository){
        $this->middleware('nguoidung',['except' => 'getLogout']);
        parent::__construct();
        $this->repository = $repository;
        $this->input = Input::all();
    }

    public function getData(Request $request)
    {
        $url = $request->url();
        $value = $request->s;
        $perpage = $request->f_select_number;
        Input::flash();
        $data['users'] = $this->repository->data('email', $value, $perpage, $url);
        return view('auth.nguoidung.data', $data);
    }

    public function getDelete()
    {
        return $this->repository->delete($this->input);
    }

    public function getEdit($id)
    {
        $user = $this->repository->find($id);
        return view('auth.nguoidung.update', compact('user'));
    }

    public function postUpdate()
    {
        dd($this->input);
        $this->repository->update($this->input);
        return redirect()->route('auth.user.data')->withSuccess(trans('message.update_success'));
    }

    public function getActive($id)
    {
        $active = $this->repository->find($id);
        $active->active *= -1;
        $this->repository->update($active);
    }

    public function getLogout() {
        Auth::guard('nguoidung')->logout();
        return redirect('nguoi_dung/login');
    }

//    public function getSyncForums(){
//        $host = Config::get('xenforo.host');
//        $client = new Client(['base_uri' => 'http://localhost/xf/']);
//        $user = User::chunk(2,function ($rows) use ($client){
//            foreach ($rows as $row){
////            $context = stream_context_create(array(
////                'http' => array('ignore_errors' => true),
////            ));
////            $result = file_get_contents('http://localhost/xf/api.php?action=register&hash=quangquang&username=1477011&password=123456&email=1477011@edu.vn', false, $context);
////            dd(json_decode($result,true));
//                $exists = $client->request('GET','api.php', [
//                    'query' => [
//                        'action' => 'getUser',
//                        'hash' => 'quangquang',
//                        'value' => $row->code
//                    ],
//                    'exceptions' => false,
//                ]);
//                if(property_exists(json_decode($exists->getBody()->getContents(),false),'error')){
//                    $response = $client->request('GET','api.php',[
//                        'query'=>[
//                            'action' => 'register',
//                            'hash' => 'quangquang',
//                            'username'=>$row->code,
//                            'password'=>'123456',
//                            'email'=>$row->code.'@edu.vn'
//                        ]]);
//                }
////            dd(json_decode($response->getBody()->getContents(),true));
//            }
//        });
//    }
}