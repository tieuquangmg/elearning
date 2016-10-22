<?php

namespace App\Modules\Auth\Models;

use App\Modules\Auth\Modules\Team;
use App\Modules\Media\Models\Message;
use App\Modules\Organize\Models\Classes;
use App\Modules\Organize\Models\User_test;
use App\Modules\Security\Models\RoleUser;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Modules\Security\Models\Role;
use Zizaco\Entrust\Traits\EntrustUserTrait;
class User extends Authenticatable
{
    use EntrustUserTrait;
//    protected $connection = 'qlsv';
    public $table = 'users';
    public function team(){
        return $this->hasMany(Team::class, 'team_details');
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'first_name', 'last_name', 'code', 'email', 'birthday', 'phone_number', 'sex', 'address', 'active', 'image','password'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function roles(){
        return $this->belongsToMany(Role::class, 'role_user');
    }
    public function hasRole($role){
        if(is_string($role)){
            return $this->roles->contains('name', $role);
        }elseif (is_array($role)){
            foreach ($role as $item){
                if(!$this->roles->contains('name', $item)) return false;
            }
            return true;
        }
        return !!$role->intersect($this->roles)->count();
    }
    public function has_role($role){

    }
    public function assign($role){
        if(is_string($role)){
            return $this->roles()->save(
              Role::whereName($role)->firstOrFail()
            );
        }
        return $this->roles()->save($role);
    }
    //----------------------> lọc user theo vai trò
    public function scopeFilterRole($query, $role){
        return $query->join('role_user', 'users.id', '=', 'role_user.user_id')
            ->join('roles', 'roles.id', '=', 'role_user.role_id')
            ->where('roles.name', '=', $role);
    }
    //----------------------> xác định vai trò của user
    public function roleOfUser($id){
        return RoleUser::where('user_id', $id)->lists('display_name');
    }
    public function scopeFirstName($query, $filter){
        if($query=='') return $query;
        return $query->where('user.first_name', $filter);
    }
    public function scopeLastName($query, $filter){
        if($query=='') return $query;
        return $query->where('user.last_name', $filter);
    }
    public function scopeCode($query, $filter){
        if($query=='') return $query;
        return $query->where('user.code', $filter);
    }
    public function scopeEmail($query, $filter){
        if($query=='') return $query;
        return $query->where('user.email', $filter);
    }
    public function scopePhoneNumber($query, $filter){
        if($query=='') return $query;
        return $query->where('user.phone_number', $filter);
    }
    public function classes(){
       return $this->belongsToMany(Classes::class,'class_detail','user_id','class_id');
    }
    public function user_test(){
        return $this->hasMany(User_test::class,'user_id');
    }
    public function message(){
        return $this->hasMany(Message::class,'to');
    }
    public function getFullNameAttribute()
    {
        return preg_replace('/\s+/', ' ',$this->first_name.' '.$this->last_name);
    }
}