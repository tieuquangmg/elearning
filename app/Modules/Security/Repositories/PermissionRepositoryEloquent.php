<?php 
namespace App\Modules\Security\Repositories; 

use App\Modules\Security\Models\Permission;
use App\Modules\Security\Models\PermissionRole;

class PermissionRepositoryEloquent implements PermissionRepository
{
   protected $model;
   public function __construct(Permission $model){
      $this->model = $model;
   }
   public function index(){
      $data['roles'] =  $this->model->data();
      $data['permissions'] = Permission::all();
      return $data;
   }
   public function data($key, $value = null, $prepage, $url){
      if($prepage == null){
         $prepage = 10;
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
   public function update($input){
      $data = $this->model->find($input['id']);
      $data -> name = $input['name'];
      $data -> display_name = $input['display_name'];
      $data -> description = $input['description']; $data ->save();
      return $data;
   }
   public function delete($input){
      PermissionRole::whereIn('permission_id', $input['ids'])->delete();
      return $this->model->whereIn('id', $input['ids'])->delete();
   }
   public function find($id)
   {
      // TODO: Implement find() method.
      return $this->model->find($id);
   }   
}
