<?php

namespace App\Modules\Examination\Models;

use App\Modules\Examination\Models\MiniTest;
use Illuminate\Database\Eloquent\Model;

class TestDetail extends Model 
{
    public $table = 'test_detail';
    public $fillable = ['test_id', 'mini_test_id', 'table'];

    public  function test(){
        return $this->belongsTo(Test::class);
    }

    public function mini_test(){
       return $this->belongsTo(MiniTest::class);
    }
}
