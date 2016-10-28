<?php

namespace App\Modules\Subject\Models;

use Illuminate\Database\Eloquent\Model;

class User_unit extends Model
{
    protected $table = 'user_unit';
    protected $fillable = ['user_id','unit_id','login_time'];
}
