<?php 
namespace App\Modules\Media\Repositories; 

use App\Modules\Media\Models\Notify;

class NotifyRepositoryEloquent implements NotifyRepository
{
    protected $model;
    public function __construct(Notify $model){
        $this->model = $model;
    }
    public function data(){
        return $this->model->paginate(10);
    }
    public function create($input){
        return $this->model->create($input);
    }
    public function update($input){
        return $this->model->where('id', $input['id'])->update($input);
    }
    public function find($id){
        return $this->model->find($id);
    }
    public function delete($input){
        return $this->model->isDelete($input);
    }
}
