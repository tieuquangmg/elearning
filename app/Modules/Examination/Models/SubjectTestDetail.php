<?php

namespace App\Modules\Examination\Models;

use Illuminate\Database\Eloquent\Model;

class SubjectTestDetail extends Model
{
    protected $fillable = ['theory_test_id', 'theory_question_id', 'answer', 'reply'];
    public function theory_test(){
        return $this->belongsTo(TheoryTest::class);
    }
    public function theory_question(){
        return $this->belongsTo(TheoryQuestion::class);
    }
}
