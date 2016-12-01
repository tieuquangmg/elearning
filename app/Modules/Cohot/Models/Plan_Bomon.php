<?php

namespace App\Modules\Cohot\Models;

use Illuminate\Database\Eloquent\Model;

class Plan_Bomon extends Model
{
    protected $table = 'plan_bomon';
    protected $fillable = ['id','ma_bo_mon','name'];
}
