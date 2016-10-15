<?php

namespace App\Modules\Lesson\Models;

use App\Modules\Examination\Models\Test;
use App\Modules\Knowledge\Models\Unit;
use Illuminate\Database\Eloquent\Model;


class Texts extends Model 
{
    
    public  $table = 'texts';
    public $fillable = ['unit_id', 'gist', 'gist_trans', 'texts', 'texts_trans', 'test_id'];
    
    public function unit(){
        return $this->belongsTo(Unit::class, 'unit_id');
    }

    public function test(){
        return $this->belongsTo(Test::class, 'test_id');
    }
}
