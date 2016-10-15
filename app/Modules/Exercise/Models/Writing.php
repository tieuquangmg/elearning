<?php

namespace App\Modules\Exercise\Models;

use Illuminate\Database\Eloquent\Model;


class Writing extends Model 
{
    

    public $table = 'writing';
    public $fillable = ['question_id', 'answer'];
    public function question(){
        return $this->belongsTo(Question::class);
    }
}
