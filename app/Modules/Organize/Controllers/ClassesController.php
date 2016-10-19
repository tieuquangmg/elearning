<?php 
namespace App\Modules\Organize\Controllers;
use App\Http\Controllers\Controller;
use App\Modules\Auth\Models\User;
use App\Modules\Organize\Repositories\ClassRepository;
use App\Modules\Security\Models\Role;
use App\Modules\Security\Models\RoleUser;
use App\Modules\Subject\Models\Class_meeting;
use App\Modules\Subject\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Modules\Organize\Models\Classes;

class ClassesController extends OrganizeController
{
    protected $repository, $input;
    protected $prefix = 'organize.';

    public function __construct(ClassRepository $repository)
    {
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
        $data = $this->repository->data($request->all(),$perpage,$url);
        return view($this->prefix.'class.data', $data);
    }
    public function postCreate(){
        //dd($this->input);
        try{
            $this->repository->create($this->input);
            dump($this->input);
            Class_meeting::create(['class_id']);
            return redirect()->back()->withSuccess('Tạo lớp học thành công');
        }catch (\Exception $e){
            return redirect()->back()->withError('Mã lớp học bị trùng vui lòng thử lại');
        }
    }

    public function postUpdate(){
        unset($this->input['_token']);
        $this->repository->update($this->input);
        return redirect()->back()->withSuccess('Cập nhật thành công');
    }
    public function getDelete(){
        return $this->repository->delete($this->input);
    }
    public function getFind($id){
        return $this->repository->find($id);
    }
    public function getDetail($id){
        $data = $this->repository->detail($id);
        return view($this->prefix.'class.detail', $data);
    }
    public function getEnroll(){
        return $this->repository->enroll($this->input);
    }

    public function getTest($id){
        $data = $this->repository->test($id);
        return view($this->prefix.'class.test',$data);
    }
    public function getFilter($class_id){
        $data['students'] = $this->repository->filter($this->input,$class_id);
        $data['filter'] = $this->input;
        return view($this->prefix.'class.includes.listAddStudent',$data);
    }
    public function getUnEnroll(){
        return $this->repository->unenroll($this->input);
    }
    public function getAttendance($id){
        $data = $this->repository->attendance($id);
        return view($this->prefix.'class.attendance',$data);
    }
    public function getScore($id){
        $data = $this->repository->score($id);
        return view('organize.class.final_score',$data);
    }
}
