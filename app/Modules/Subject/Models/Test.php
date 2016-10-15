<?php
namespace App\Modules\Subject\Models;

use App\Modules\Examination\Models\UnitTestDetail;
use App\Modules\Organize\Models\User_test;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    public $table = 'tests';
    public $fillable = ['unit_id', 'name', 'active', 'time', 'number_question'];
    
    public function user_test(){
        return $this->hasMany(User_test::class);
    }
    public function user(){
        return $this->belongsTo(User_test::class);
    }
    public function unit(){
        return $this->belongsTo(Unit::class, 'unit_id');
    }
}