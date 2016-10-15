<?php

namespace App\Modules\Examination\Models;

use App\Modules\Subject\Models\Subject;
use Illuminate\Database\Eloquent\Model;

class SubjectTest extends Model
{
    protected $fillable = ['subject_id', 'user_id', 'start_time', 'work_time', 'score'];
    public function subject(){
        return $this->belongsTo(Subject::class);
    }
}
