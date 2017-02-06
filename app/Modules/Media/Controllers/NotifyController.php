<?php 
namespace App\Modules\Media\Controllers; 
use App\Events\ClassPusherEvent;
use App\Events\SystemNotifyEvent;
use App\Http\Controllers\Controller;
use App\Modules\Media\Models\Notify;
use App\Modules\Media\Models\User_notify;
use App\Modules\Media\Repositories\NotifyRepository;
use App\Modules\Organize\Models\Classes;
use Illuminate\Support\Facades\Input;

class NotifyController extends Controller
{
    protected $repository, $input;
    public function __construct(NotifyRepository $repository)
    {
        parent::__construct();
        $this->repository = $repository;
        $this->input = Input::all();
    }
    public function getData(){
        $data ['data'] =$this->repository->data($this->input);
        return view('media.notify.data', $data);
    }
    public function getAdd(){
        return view('media.notify.create');
    }
    public function getEdit($id){
        $data['data'] = $this->repository->find($id);
        return view('media.notify.edit', $data);
    }
    public function postCreate(){
        $this->repository->create($this->input);
        return redirect()->route('notify.data');
    }
    public function postUpdate(){
        unset($this->input['_token']);
        $this->repository->update($this->input);
        return redirect()->route('notify.data');
    }

    public function postDelete(){
        $this->repository->delete($this->input);
        return 1;
    }
    public function postSendnoti(){
        $noti = Notify::find($this->input['id']);
        $array = explode(',',$noti->entity_id);

        //lớp học
        if($noti->entity_type_id == 4){
            foreach ($array as $row){
                $ids = Classes::find($row)->student->lists('id');
                foreach ($ids as $id){
                    $u_n = User_notify::create(['user_id'=>$id,'user_type_id'=>1,'notify_id'=>$noti->id,'status'=>0]);
                    event(new ClassPusherEvent($u_n));
                }
            }
        }
        //sinh vien
        if($noti->entity_type_id == 3){
            foreach ($array as $row){
                    $u_n = User_notify::create(['user_id'=>$row,'user_type_id'=>1,'notify_id'=>$noti->id,'status'=>0]);
                    event(new ClassPusherEvent($u_n));
            }
        }
        //giao vien
        if($noti->entity_type_id == 5){
            foreach ($array as $row){
                $u_n = User_notify::create(['user_id'=>$row,'user_type_id'=>0,'notify_id'=>$noti->id,'status'=>0]);
                event(new ClassPusherEvent($u_n));
            }
        }
        //hệ thống
        if($noti->entity_type_id == 6){
            event(new SystemNotifyEvent($noti));
        }
        //toan bo hoc sinh
        if($noti->entity_type_id == 7){
            event(new SystemNotifyEvent($noti));
        }
        //toan bo giao vien
        if($noti->entity_type_id == 8){
            event(new SystemNotifyEvent($noti));
        }
        return response(['success'=>true],200);
    }
}
