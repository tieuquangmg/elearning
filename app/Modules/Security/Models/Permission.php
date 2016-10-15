<?php

namespace App\Modules\Security\Models;
use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission
{
    public function roles(){
        return $this->belongsToMany(Role::class);
    }
    public $fillable = ['name', 'display_name', 'description'];
}
