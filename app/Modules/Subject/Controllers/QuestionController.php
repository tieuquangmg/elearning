<?php 
namespace App\Modules\Subject\Controllers;
//use App\Http\Controllers\Controller;
use App\Modules\Subject\Models\QuestionBank;
use App\Modules\Subject\Models\Unit;
use App\Modules\Subject\Repositories\QuestionRepository;
use Illuminate\Support\Facades\Input;
use App\Services\Upload;

class QuestionController extends BaseController
{
    protected $repository, $input, $prefix='subject.';
    public function __construct(QuestionRepository $repository)
    {
        parent::__construct();
        $this->repository = $repository;
        $this->input = Input::all();
    }
    public function getAdd($unit_id){
        $data['unit'] = Unit::find($unit_id);
        return view($this->prefix.'unit.question.create', $data);
    }
    public function getEdit($unit_id){
        $data['question'] = QuestionBank::find($unit_id);
        return view($this->prefix.'unit.question.update', $data);
    }
    public function postCreate(){
        $this->repository->create($this->input);
        return redirect()->route('unit.compose', $this->input['unit_id'])->withSuccess('Tạo câu hỏi thành công');
    }
    public function postUpdate(){
        unset($this->input['_token']);
        $unit_id = $this->repository->update($this->input);
        return redirect()->route('unit.compose', $unit_id)->withSuccess('Cập nhật câu hỏi thành công');
    }
    public function getDelete($id){
        $this->repository->delete($id);
        return redirect()->back()->withSuccess('Đã xóa câu hỏi');
    }
    public function getFind($id){
        return $this->repository->find($id);
    }
    public function getF(){
    }
}