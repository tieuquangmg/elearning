<?php

namespace App\Modules\Examination\Repositories;
use Illuminate\Support\Facades\Request;
use App\Modules\Examination\Models\Test;

class TestRepositoryEloquent
{
    protected $model;
    public function __construct(Test $model)
    {
        $this->model = $model;
    }

    public function getDo($id){
        $data['test'] = $this->model->find($id);
        $data['questions'] = $data['test']->multi_choice;
        return $data;
    }
    public function postDo(){
        $data['test']=$this->model->find(Request::get('id'));
        $data['questions'] = $data['test']->multi_choice;
        $true = 0; $i =0;
        $result = [];
        foreach($data['questions'] as $v){
            if($v->answer==Request::get('answer'.$v->id)){
                ++$true;
                $result[++$i] = true;
            }else{
                $result[++$i] = false;
            }
        }
        $data['result'] = $result;
        return $data;
    }
    
}
