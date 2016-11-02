<?php

namespace App\Modules\Examination\Models;

use App\Modules\Subject\Models\QuestionBank;
use Illuminate\Database\Eloquent\Model;

class UnitTestDetail extends Model
{
    protected $table = 'unit_test_details';
    protected $fillable = ['unit_test_id', 'question_bank_id', 'answer', 'reply'];
    public function unit_test(){
        return $this->belongsTo(UnitTest::class);
    }
    public function unit_question(){
        return $this->belongsTo(UnitQuestion::class);
    }
    public function question($question_bank_id){
        return QuestionBank::find($question_bank_id);
    }
}
