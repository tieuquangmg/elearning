<?php

namespace App\Modules\Examination\Models;

use Illuminate\Database\Eloquent\Model;

class LessonTest extends Model
{
    protected $fillable = ['lesson_id', 'user_id', 'start_time', 'work_time', 'score'];
}
