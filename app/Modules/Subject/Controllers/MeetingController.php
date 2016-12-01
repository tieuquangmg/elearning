<?php
namespace App\Modules\Subject\Controllers;
use App\Http\Controllers\Controller;
use App\Modules\Subject\Repositories\MeetingRepository;
use Illuminate\Support\Facades\Input;
use App\Services\Upload;

class MeetingController extends Controller
{
    protected $repository, $input, $prefix = 'subject.';
    public function __construct(MeetingRepository $repository){
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
        $data['data'] = $this->repository->find($id);
        return view($this->prefix .'unit.meeting.update',$data);
    }

    public function postUpdate(){
//        dd($this->input);
        unset($this->input['_token']);
        $this->input["record"] = isset($this->input["record"]) ? 1 : 0;
        $this->input["auto_start_recording"] = isset($this->input["auto_start_recording"]) ? 1 : 0;
        $this->input["allow_start_top_recording"] = isset($this->input["allow_start_top_recording"]) ? 1 : 0;
//        dd($this->input);
        $this->repository->update($this->input,$this->input['id']);
        return redirect()->back()->withSuccess('Sửa lớp học trực tuyến thành công');
    }

    public function getFind($id){
        return $this->repository->find($id);
    }

    public function getDelete($id){
        $this->repository->delete($id);
        return redirect()->back()->withSuccess('Xóa lớp học trực tuyến thành công');
    }

    public function getInput()
    {
        return $this->input;
    }



}
