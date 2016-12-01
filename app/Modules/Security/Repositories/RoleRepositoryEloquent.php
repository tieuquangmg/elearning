<?php 
namespace App\Modules\Security\Repositories; 

use App\Modules\Security\Models\Permission;
use App\Modules\Security\Models\Role;
use App\Modules\Auth\Models\User;
use App\Modules\Security\Models\RoleUser;
use App\Modules\Security\Models\PermissionRole;

class RoleRepositoryEloquent implements RoleRepository
{
   protected $model;
   public function __construct(Role $model){
      $this->model = $model;
   }
   public function data($key,$value = null,$prepage,$url){
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
      RoleUser::whereIn('role_id', $input['ids'])->delete();
      PermissionRole::whereIn('role_id', $input['ids'])->delete();
      return $this->model->whereIn('id', $input['ids'])->delete();
   }
   public function find($id)
   {
      return $this->model->find($id);
   }
   public function user_role($id){
        $data['user'] = User::find($id);
        $data['roles'] = $this->model->all();
        return $data;
   }
   public function role_user($input){
       if ($input != null){
           $id_lop = $input['search']['id_lop'];
           if($input['order'] == null){
               $order = 'id';
           }else{
               $order = $input['order'];
           }
           $data['users'] = User::where(function ($query) use($input,$id_lop){
               $query->where('active', 1);
               $query->where('ho_ten', 'like', '%' . $input['search']['hoten'] . '%');
               $query->where('code', 'like','%'.$input['search']['code'].'%');
               if($id_lop != '' && $id_lop != null){
                   $query->whereHas('lop', function ($q) use ($id_lop) {
                       return $q->where('ten_lop', 'like', '%' . $id_lop . '%');
                   });
               }
           })
             ->orderBy('id','asc')
             ->paginate($input['number'])
           ;
       }else{
           $data['users'] =  User::where('active', 1)->paginate(10);
       }
      $data['roles'] = Role::all();
      return $data;
   }
   public function user_assign($input){
      $roles = isset($input['roleIds'])?$input['roleIds']:[];
       foreach ($input['userIds'] as $useId){
           User::find($useId)->roles()->sync($roles);
       }
   }

   public function permission_role(){
      $data['roles'] =  $this->model->all();
      $data['permissions'] = Permission::all();
      return $data;
   }
   public function role_assign($input){
      $role = Role::find($input['role']);
      $permissions = isset($input['permissions'])?$input['permissions']:[];
      if($role){
         $role->permissions()->sync($permissions);
      }
   }
}
