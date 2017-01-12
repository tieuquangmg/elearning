<?php

namespace App\Modules\Subject\Models;

use Illuminate\Database\Eloquent\Model;

class Class_meeting_time extends Model
{
    protected $table = 'class_meeting_time';
    protected $dates = ['time_start'];
    protected $fillable = ['class_meeting_id','time_start','duration','status'];

}