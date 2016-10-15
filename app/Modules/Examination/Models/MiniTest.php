<?php

namespace App\Modules\Examination\Models;

use Illuminate\Database\Eloquent\Model;
use App\Modules\Exercise\Models\Question;

class MiniTest extends Model 
{    
    public $table = 'mini_test';
    public $fillable = ['name','insistence','description','time'];
    
    public function test(){
        return $this->belongsToMany(Test::class, 'test_detail');
    }

    public function question(){
        return $this->hasMany(Question::class);
    }
}
