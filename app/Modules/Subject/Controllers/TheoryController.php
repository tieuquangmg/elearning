<?php 
namespace App\Modules\Subject\Controllers; 
use App\Modules\Subject\Models\Unit;
use App\Modules\Subject\Repositories\TheoryRepository;
use Illuminate\Support\Facades\Input;

class TheoryController extends BaseController
{
    protected $repository, $input, $prefix = 'subject.';
    public function __construct(TheoryRepository $repository)
    {
        parent::__construct();
        $this->repository = $repository;
        $this->input = Input::all();
    }
    public function getAdd($unit_id){
        $data['unit'] = Unit::find($unit_id);
        return view($this->prefix.'unit.theory.create', $data);
    }
    public function getEdit($id){
        $data['theory'] = $this->repository->find($id);
        return view($this->prefix.'unit.theory.update', $data);
    }
    public function postCreate(){
        $this->repository->create($this->input);
        return redirect()->route('unit.compose', $this->input['unit_id'])->withSuccess('Thêm nội dung thành công');
    }
    public function postUpdate(){
        unset($this->input['_token']);
        $data = $this->repository->update($this->input);
        return redirect()->route('unit.compose', $data[0])->withSuccess('Sửa nội dung thành công');
    }
    public function getFind($id){
        return $this->repository->find($id);
    }
    public function getDelete($id){
         $this->repository->delete($id);
        return redirect()->back()->withSuccess('Xóa thành công');
    }
}