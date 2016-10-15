<?php 
namespace App\Modules\Subject\Repositories; 

use App\Modules\Subject\Models\Document;

class DocumentRepositoryEloquent implements DocumentRepository
{
   protected $model;
   public function __construct(Document $model){
      $this->model= $model;
   }

   public function data(){}
   public function create($input){
//      dump($input);
//      if(isset($input['image'])) {
//         $i = new Upload();
//         $input['image'] = $i->image($input['image'], 'image/subject', 400, 300);
//      }
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
