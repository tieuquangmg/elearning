<?php 
namespace App\Modules\Subject\Repositories; 

use App\Modules\Subject\Models\Subject;
use App\Modules\Subject\Models\Test;

class TestRepositoryEloquent implements TestRepository
{
   protected $model;
public function __construct(Test $model){
   $this->model = $model;
}
   public function data($input){
      $unit_id = Subject::find($input)->unit->lists('id')->toArray();
     return $this->model->whereIn('unit_id',[2]);
   }
   public function create($input){
      return $this->model->create($input);
   }
   public function update($input){
      return $this->model->where('id',$input['id'])->update($input);
   }
   public function find($id){}
   public function delete($id){
      return $this->model->where('id',$id)->delete();
   }
   public function edit($input){}
}
