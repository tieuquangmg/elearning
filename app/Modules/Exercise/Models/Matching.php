<?php

namespace App\Modules\Exercise\Models;

use Illuminate\Database\Eloquent\Model;

class Matching extends Model 
{   
    protected $table = 'matching';
    public $fillable = ['question_id', 'premise', 'response', 'pr_img', 'pr_img'];

    public function question(){
        return $this->belongsTo(Question::class);
    }

}
