<?php

namespace App\Modules\Examination\Models;

use App\Modules\Examination\Models\MiniTest;
use Illuminate\Database\Eloquent\Model;

class Test extends Model 
{   
    public  $table = 'tests';
    public $fillable = ['name', 'active', 'minutes'];

    public function detail(){
        return $this->hasMany(TestDetail::class, 'test_id');
    }

    public function mini_test(){
        return $this->belongsToMany(MiniTest::class, 'test_detail');
    }
}
