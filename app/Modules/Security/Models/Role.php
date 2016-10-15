<?php

namespace App\Entities\Guard;

namespace App\Modules\Security\Models;
use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
    public function permissions(){
        return $this->belongsToMany(Permission::class);
    }
//    public function hasPermission($permission){
//        if(is_string($permission)){
//            return $this->permissions->contains('name', $permission);
//        }
//        return !!$permission->intersect($this->permissions)->count();
//    }
    public function assign(Permission $permission){
        return $this->permissions()->save($permission);
    }
    public $fillable = ['name', 'display_name', 'description'];

}
