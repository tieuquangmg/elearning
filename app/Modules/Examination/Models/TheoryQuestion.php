<?php

namespace App\Modules\Examination\Models;

use App\Modules\Subject\Models\Theory;
use Illuminate\Database\Eloquent\Model;

class TheoryQuestion extends Model
{
    public $fillable = ['theory_id', 'question', 'reply1', 'reply2', 'reply3', 'reply4', 'answer', 'active' ];
    public function theory(){
        return $this->belongsTo(Theory::class);
    }
}
