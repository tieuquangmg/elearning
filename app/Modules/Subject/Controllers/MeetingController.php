<?php
namespace App\Modules\Subject\Controllers;
use App\Http\Controllers\Controller;
use App\Modules\Subject\Repositories\MeetingRepository;
use Illuminate\Support\Facades\Input;
use App\Services\Upload;

class MeetingController extends Controller
{
    protected $repository, $input, $prefix = 'subject.';
    public function __construct(MeetingRepository $repository)
    {
        parent::__construct();
        $this->repository = $repository;
        $this->input = Input::all();
    }

    public function getAdd($id){
        return view($this->prefix .'unit.meeting.create',['id' => $id]);
    }
    public function postCreate(){
        $meeting_id = $this->repository->create($this->input);
        return redirect()->route('unit.compose', $meeting_id->unit_id)->withSuccess('Thêm lớp học trực tuyến thành công');
    }
    public function getEdit($id){
        return view($this->prefix .'unit.meeting.edit',['id' => $id]);
    }
    public function postUpdate($id){
        unset($this->input['_token']);
        $this->repository->update($this->input,$id);
        return redirect()->back()->withSuccess('Sửa lớp học trực tuyến thành công');
    }
    public function getFind($id){
        return $this->repository->find($id);
    }
    public function getDelete($id){
        $this->repository->delete($id);
        return redirect()->back()->withSuccess('Xóa lớp học trực tuyến thành công');
    }
}
