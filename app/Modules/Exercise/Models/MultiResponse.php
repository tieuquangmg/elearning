<?php

namespace App\Modules\Exercise\Models;

use Illuminate\Database\Eloquent\Model;

class MultiResponse extends Model 
{    
    protected $table = 'multi_response';
    public $fillable = ['question_id', 'reply', 'picture', 'video', 'audio', 'answer'];
    public function question(){
        return $this->belongsTo(Question::class);
    }
}
