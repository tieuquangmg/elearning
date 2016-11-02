<?php

namespace App\Modules\Organize\Models;

use App\Modules\Auth\Models\User;
use App\Modules\Examination\Models\UnitTestDetail;
use App\Modules\Subject\Models\Test;
use Illuminate\Database\Eloquent\Model;

class User_test extends Model
{
    protected $table = 'user_test';
    protected $fillable = ['user_id', 'test_id', 'start_time', 'end_time', 'work_time', 'score','status'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function test(){
       return $this->belongsTo(Test::class);
    }
    public function user_test_detail(){
        return $this->hasMany(UnitTestDetail::class, 'unit_test_id');
    }
}