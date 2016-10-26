<?php 
namespace App\Modules\Media\Models; 
use App\Modules\Auth\Models\User;
use Illuminate\Database\Eloquent\Model;

class Notify extends Model
{
    public $table='notifies';
    public $fillable = ['name', 'content','entity_id','create_by'];

    public function scopeIsDelete($query, $input){
        if(is_array($input)) return $query->whereIn('id', $input)->delete();
        return $query->where('id', $input)->delete();
    }

    public function sender(){
        return $this->belongsTo(User::class,'create_by');
    }

    public function user_notify(){
        return $this->hasMany(User_notify::class, 'notify_id');
    }
}