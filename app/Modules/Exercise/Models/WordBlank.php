<?php

namespace App\Modules\Exercise\Models;

use Illuminate\Database\Eloquent\Model;


class WordBlank extends Model 
{
    
    public $table = 'word_blank';
    public $fillable = ['question_id', 'reply', 'no'];
    public function question(){
        return $this->belongsTo(Question::class);
    }
}
