<?php 
namespace App\Modules\Media\Models; 
use App\Modules\Auth\Models\Nguoidung;
use Illuminate\Database\Eloquent\Model;

class Notify extends Model
{
    public $table='notifies';
    public $fillable = ['name', 'content', 'time', 'entity_type_id', 'entity_id', 'create_by', 'active'];
    protected $dateFormat = 'Y-m-d H:i:s';

    public function scopeIsDelete($query, $input){
        if(is_array($input)) return $query->whereIn('id', $input)->delete();
        return $query->where('id', $input)->delete();
    }

    public function sender(){
        return $this->belongsTo(Nguoidung::class,'create_by');
    }

    public function user_notify(){
        return $this->hasMany(User_notify::class, 'notify_id');
    }
}