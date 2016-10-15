<?php 
namespace App\Modules\Subject\Models; 
use App\Modules\Auth\Models\User;
use Illuminate\Database\Eloquent\Model;

class Theory extends Model
{
    public $table = 'theories';
    public $fillable = ['unit_id', 'name', 'intro', 'content', 'notify', 'active','time'];
    public function unit(){
        return $this->belongsTo(Unit::class);
    }
    public function user(){
       return $this->belongsToMany(User::class,'user_theory','theory_id','user_id');
    }
    public function user_theory(){
        return $this->hasMany(User_theory::class,'theory_id');
    }

}