<?php
namespace App\Modules\Subject\Models;
use App\Modules\Auth\Models\User;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $table = 'comments';
    public $fillable = ['parent_id','comment','user_id','theory_id','like'];

    public function scopeReply($query,$id){
        return $query->where('parent_id',$id);
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function theory(){
       return $this->belongsTo(Theory::class,'theory_id');
    }
}