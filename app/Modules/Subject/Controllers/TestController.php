<?php 
namespace App\Modules\Subject\Controllers; 
use App\Modules\Subject\Models\Test;
use App\Modules\Subject\Repositories\TestRepository;
use Illuminate\Support\Facades\Input;

class TestController extends BaseController
{
    protected $prefix = "subject.";

    public function __construct(TestRepository $repository)
    {
        parent::__construct();
        $this->repository = $repository;
        $this->input = Input::all();
    }
    public function getAdd($id){
        return view($this->prefix.'unit.test.create',['id'=>$id]);
    }
    public function postCreate(){

        $unit_id = $this->repository->create($this->input);
       return redirect()->route('unit.compose', $unit_id->unit_id)->withSuccess('Thêm câu hỏi thành công');
    }
    public function getData($id)
    {
        $data['tests'] =  $this->repository->data($id)->get();
        
        return view($this->prefix.'test.data',$data);
    }
    public function getEdit($id){
        $data['test'] = Test::find($id);
        return view($this->prefix.'unit.test.update',$data);
    }

    public function postUpdate(){
        unset($this->input['_token']);
        $unit_id =  $this->input['unit_id'];
            $this->repository->update($this->input);
        return redirect()->route('unit.compose', $unit_id)->withSuccess('Cập nhật bài kiểm tra thành công');
    }
    public function getDelete($id){
        $this->repository->delete($id);
        return redirect()->back()->withSuccess(' Đã xóa bài kiểm tra');

    }
}