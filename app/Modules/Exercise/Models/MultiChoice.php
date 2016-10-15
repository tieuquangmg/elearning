<?php

namespace App\Modules\Exercise\Models;

use Illuminate\Database\Eloquent\Model;

class MultiChoice extends Model 
{  

    protected $table = 'multi_choice';

    public $fillable = ['question_id', 'reply', 'answer', 'video', 'audio', ];

    public function question(){
        return $this->belongsTo(Question::class);
    }

}
