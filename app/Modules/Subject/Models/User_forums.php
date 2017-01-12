<?php

namespace App\Modules\Subject\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class User_forums extends Model
{
    protected $table = 'user_forum';
    protected $fillable = ['user_id', 'unit_id', 'number_question'];

    public function scopeUser_unit($query, $unit_id)
    {
        if (Auth::guard('nguoidung')->user() != null){
            return $query->where('user_id', Auth::guard('nguoidung')->user()->id)->where('unit_id', $unit_id);
        }else {
            return $query->where('user_id', Auth::user()->id)->where('unit_id', $unit_id);
        }
    }
}