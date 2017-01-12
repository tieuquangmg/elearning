<?php
namespace App\Modules\Subject\Models;

use App\Modules\Examination\Models\UnitTestDetail;
use App\Modules\Organize\Models\User_test;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    public $table = 'tests';
    public $fillable = ['unit_id', 'name', 'active', 'time', 'number_question', 'number_test','scoring','scoring_method_id'];

    public function user_test()
    {
        return $this->hasMany(User_test::class, 'test_id');
    }
    public function user()
    {
        return $this->belongsTo(User_test::class, 'user_id');
    }
    public function unit()
    {
        return $this->belongsTo(Unit::class, 'unit_id');
    }
    public function scoring_method()
    {
        return $this->belongsTo(Scoring_method::class,'scoring_method_id');
    }
}