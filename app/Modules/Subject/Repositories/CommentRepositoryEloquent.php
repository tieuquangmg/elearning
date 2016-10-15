<?php
namespace App\Modules\Subject\Repositories;

use App\Modules\Subject\Models\Comment;

class CommentRepositoryEloquent implements CommentRepository
{
    protected $model;
    public function __construct(Comment $model){
        $this->model= $model;
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
