<?php 
namespace App\Modules\Media\Repositories; 

use App\Events\ClassPusherEvent;
use App\Modules\Media\Models\Notify;
use Illuminate\Support\Facades\Auth;

class NotifyRepositoryEloquent implements NotifyRepository
{
    protected $model;
    public function __construct(Notify $model){
        $this->model = $model;
    }
    public function data(){
        return $this->model->paginate(20);
    }
    public function create($input){
        $input['create_by'] = Auth::guard('nguoidung')->user()->id;
        return $this->model->create($input);
    }
    public function update($input){
         $data = $this->model->with('sender')->where('id', $input['id'])->update($input);
        event(new ClassPusherEvent($this->model->find($input['id'])));
        return $data;
    }
    public function find($id){
        return $this->model->find($id);
    }
    public function delete($input){
        return $this->model->isDelete($input);
    }
}