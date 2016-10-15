<?php 
namespace App\Modules\Subject\Controllers;
use App\Modules\Subject\Models\Unit;
use App\Modules\Subject\Repositories\UnitRepository;
use Illuminate\Support\Facades\Input;

class UnitController extends BaseController
{
    protected $repository, $input, $prefix = 'subject.';
    public function __construct(UnitRepository $repository)
    {
        parent::__construct();
        $this->repository = $repository;
        $this->input = Input::all();
    }
    public function postCreate(){
        $this->repository->create($this->input);
        return redirect()->route('subject.unit', $this->input['subject_id'])->withSuccess('Tạo bài học thành công');
    }
    public function getEdit($id){
        $data['unit'] = Unit::find($id);
        return view($this->prefix.'unit.update',$data);
    }
    public function postUpdate(){
        if(! isset( $this->input['active'] )){
            $this->input['active'] = 0;
        }
        unset($this->input['_token']);
        $this->repository->update($this->input);
        return redirect()->route('subject.unit',$this->input['subject_id'])->withSuccess('Cập nhật bài học thành công');
    }
    public function getDelete($id){
        $this->repository->delete($id);
        return redirect()->back()->withSuccess('Xóa bài học thành công');
    }
    public function getActive(){
        $this->repository->active($this->input);
        return response()->json(true);
    }
    public function getCompose($id){
        $data = $this->repository->compose($id);
        return view($this->prefix.'unit.compose', $data);
    }
}
