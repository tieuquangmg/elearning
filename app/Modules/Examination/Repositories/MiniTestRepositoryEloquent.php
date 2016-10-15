<?php

namespace App\Modules\Examination\Repositories;

use App\Modules\Examination\Models\MiniTest;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;


/**
 * Class MiniTestRepositoryEloquent
 * @package namespace App\Modules\Exercise\Repositories;
 */
class MiniTestRepositoryEloquent implements MiniTestRepository
{
    protected $model;

    public function __construct(MiniTest $model)
    {
        $this->model = $model;
    }
    public function data($key,$value = null,$prepage,$url){
        if($prepage == null){
            $prepage = 1;
        }
        $data =  $this->model->where(function ($query) use ($value,$key){
            if($value != null){
                $query->where($key,'like','%'.$value.'%');
            }
        })
            ->orderBy('id', 'desc')->paginate($prepage);
        $data->setPath($url.'?s='.$value.'&f_select_number='.$prepage);
        return $data;
    }
    public function create($input){
        return $this->model->create($input);
    }
    
    public function update($input,$id){
        $update = $this->model->find($id);
        return $update->update($input);
    }

    public function find($id){
        return $this->model->find($id);
    }
    public function findBy($key,$vaule,$pag)
    {
        // TODO: Implement findBy() method.
        $data = $this->model->where($key,'like','%'.$vaule.'%')->paginate($pag);
//        $data->setPath(route('mini_test.findby'));
        return $data;
    }

    public function delete($input){
        return $this->model->where('id', $input)->delete();
    }
}
