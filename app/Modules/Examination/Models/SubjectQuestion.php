<?php

namespace App\Modules\Examination\Models;

use App\Modules\Subject\Models\Subject;
use Illuminate\Database\Eloquent\Model;

class SubjectQuestion extends Model
{
    public $fillable = ['subject_id', 'question', 'reply1', 'reply2', 'reply3', 'reply4', 'answer', 'active' ];
    public function subject(){
        return $this->belongsTo(Subject::class);
    }
}
