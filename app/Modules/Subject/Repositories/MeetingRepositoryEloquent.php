<?php
namespace App\Modules\Subject\Repositories;

use App\Modules\Subject\Models\Meeting;

class MeetingRepositoryEloquent implements MeetingRepository{
    protected $model;
    public function __construct(Meeting $model){
        $this->model = $model;
    }
    public function data(){}
    public function create($input){
        return $this->model->create($input);
    }
    public function update($input,$id){
        return $this->model->where('id',$id)->update($input);
    }
    public function find($id){
        return $this->model->find($id);
    }
    public function delete($id){
        return $this->model->where('id',$id)->delete($id);
    }
}