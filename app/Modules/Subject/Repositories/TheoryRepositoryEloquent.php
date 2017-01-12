<?php 
namespace App\Modules\Subject\Repositories;


use App\Modules\Subject\Models\Theory;
use Carbon\Carbon;

class TheoryRepositoryEloquent implements TheoryRepository
{
   protected $model;
   public function __construct(Theory $model){
      $this->model= $model;
   }

   public function data(){}
   public function create($input){
//       dd($input);
       $input['time'] = $input['time'] *60000;
      return $this->model->create($input);
   }
   public function update($input){
       $this->model->where('id', $input['id'])->update($input);
       return $this->model->where('id', $input['id'])->pluck('unit_id');
   }
   public function find($id){
      return $this->model->find($id);
   }
   
   public function delete($id){
      return $this->model->where('id',$id)->delete($id);
   }
}