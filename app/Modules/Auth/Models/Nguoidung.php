<?php
namespace App\Modules\Auth\Models;

use App\Modules\Media\Models\Message;
use App\Modules\Organize\Models\Classes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Modules\Security\Models\Role;
use Illuminate\Support\Facades\Cache;
use App\Modules\Security\Models\RoleUser;

use Zizaco\Entrust\Traits\EntrustUserTrait;

class Nguoidung extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    use EntrustUserTrait;
    public $table = 'nguoidungs';
    protected $fillable = [
        'name', 'password', 'ho_ten', 'email', 'image', 'id_phong', 'id_khoa', 'id_bomon',
    ];
    protected $guarded = 'nguoidung';

    protected $hidden = [
        'password', 'remember_token',
    ];
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_user');
    }

    public function hasRole($role)
    {
        if (is_string($role)) {
            return $this->roles->contains('name', $role);
        } elseif (is_array($role)) {
            foreach ($role as $item) {
                if ($this->roles->contains('name', $item)) return true;
            }
            return false;
        }
        return !!$role->intersect($this->roles)->count();
    }

    public function assign($role)
    {
        if (is_string($role)) {
            return $this->roles()->save(
                Role::whereName($role)->firstOrFail()
            );
        }
        return $this->roles()->save($role);
    }

    public function scopeFilterRole($query, $role)
    {
        return $query->join('role_user', 'users.id', '=', 'role_user.user_id')
            ->join('roles', 'roles.id', '=', 'role_user.role_id')
            ->where('roles.name', '=', $role);
    }

    public function roleOfUser($id)
    {
        return RoleUser::where('user_id', $id)->lists('display_name');
    }

    public function avatar()
    {
        if ($this->image == null) {
            return 'images/people/no-avatar.jpg';
        } else {
            return $this->image;
        }
    }

    public function classes(){
        return $this->hasMany(Classes::class,'user_id');
    }
//    public function message($user_id){
//        return self::where('to',$user_id)->where('user_recevie',1);
//        return $this->hasMany(Message::class, 'to');
//    }
}
