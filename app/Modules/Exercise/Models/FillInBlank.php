<?php

namespace App\Modules\Exercise\Models;

use Illuminate\Database\Eloquent\Model;

class FillInBlank extends Model 
{    
    protected $table = 'fill_in_blank';
    public $fillable = ['question_id', 'answer', 'no'];

    public function question(){
        return $this->belongsTo(Question::class);
    }

}
