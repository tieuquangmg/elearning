<?php

namespace App\Modules\Exercise\Models;

use Illuminate\Database\Eloquent\Model;


class Sequence extends Model 
{
    
    public $table = 'sequence';
    public $fillable = ['question_id', 'reply', 'no'];
    public function question(){
        return $this->belongsTo(Question::class);
    }
}
