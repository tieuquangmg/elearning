<?php
namespace App\Modules\Subject\Models;
use App\Modules\Auth\Models\Nguoidung;
use App\Modules\Auth\Models\User;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $table = 'comments';
    public $fillable = ['parent_id', 'user_type_id', 'comment','user_id','theory_id','like'];

    public function scopeReply($query,$id){
        return $query->where('parent_id',$id);
    }
    public function user_type(){
            return $this->user_type_id;
    }
    public function user(){
        if ($this->user_type() == 2){
            return $this->belongsTo(User::class,'user_id');
        }
        if ($this->user_type() == 1){
            return $this->belongsTo(Nguoidung::class,'user_id');
        }
    }

    public function theory(){
       return $this->belongsTo(Theory::class,'theory_id');
    }
}