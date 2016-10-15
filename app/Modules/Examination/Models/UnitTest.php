<?php

namespace App\Modules\Examination\Models;

use App\Modules\Auth\Models\User;
use App\Modules\Subject\Models\Unit;
use Illuminate\Database\Eloquent\Model;

class UnitTest extends Model
{
    public $table = 'unit_tests';
    protected $fillable = ['unit_id', 'user_id', 'start_time', 'work_time', 'score'];
    public function unit(){
        return $this->belongsTo(Unit::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function unit_test_detail(){
        return $this->hasMany(UnitTestDetail::class);
    }
}
