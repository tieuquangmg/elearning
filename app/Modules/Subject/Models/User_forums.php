<?php

namespace App\Modules\Subject\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class User_forums extends Model
{
    protected $table = 'user_forum';
    protected $fillable = ['id','user_id','unit_id','number_question'];

    public function scopeUser_unit($query,$unit_id){
        return $query->where('user_id',Auth::user()->id)->where('unit_id',$unit_id);
    }
}
