<?php
namespace App\Modules\Cohot\Repositories;


use App\Modules\Cohot\Models\Stu_ChuyenNganh;

class ChuyenNganhRepositoryEloquent implements ChuyenNganhRepository  {

    protected $model, $data;
    public function __construct(Stu_ChuyenNganh $model){
        $this->model = $model;
        $this->data['prefix'] = 'cohot';
    }

    public function data($request){
        return $this->model->paginate(10);
    }
    public function create($input){

    }
    public function update($input){

    }
    public function find($id){

    }
    public function delete($input){

    }
    public function detail($id){

    }
    public function filter($input,$class_id){

    }
    public function attendance($id){

    }
    public function updatetest($input){

    }
    public function updatescore($input){

    }
}