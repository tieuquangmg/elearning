<?php

namespace App\Modules\Exercise\Models;

use Illuminate\Database\Eloquent\Model;

class MultiChoiceText extends Model 
{  
    
    protected $table = 'multi_choice_text';
    
    public $fillable = ['question_id', 'reply', 'no', 'answer'];

    public function question(){
        return $this->belongsTo(Question::class);
    }

}
