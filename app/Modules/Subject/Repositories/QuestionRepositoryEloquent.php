<?php 
namespace App\Modules\Subject\Repositories; 

use App\Modules\Subject\Models\QuestionBank;

class QuestionRepositoryEloquent implements QuestionRepository
{
    protected $model;
    public function __construct(QuestionBank $model){
        $this->model = $model;
    }
    public function data(){}

    public function create($input){
        $input['answer'] = $input['reply'.$input['answer']];
        return $this->model->create($input);
    }
    public function update($input){
        $input['answer'] = $input['reply'.$input['answer']];
        $this->model->where('id', $input['id'])->update($input);
        return $this->model->find($input['id'])->unit_id;
    }

    public function find($id){
        return $this->model->find($id);
    }
    
    public function delete($input){
        return $this->model->find($input)->delete();
    }
}
