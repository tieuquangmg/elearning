<?php

namespace App\Modules\Auth\Models;

use Illuminate\Database\Eloquent\Model;

class User_login extends Model
{
    protected $table = 'user_login';
    protected $fillable = ['user_id'];
}
