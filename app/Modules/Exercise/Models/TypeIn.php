<?php

namespace App\Modules\Exercise\Models;

use Illuminate\Database\Eloquent\Model;


class TypeIn extends Model 
{
    
    public $table = 'type_in';
    public $fillable = ['question_id', 'answer'];
    public function question(){
        return $this->belongsTo(Question::class);
    }
}
