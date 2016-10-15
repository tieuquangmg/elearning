<?php 
namespace App\Modules\Subject\Models;
use App\Modules\Examination\Models\UnitTest;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    public $table = "units";
    public $fillable = ['subject_id', 'name', 'image', 'description', 'active', 'description'];
    public function subject(){
        return $this->belongsTo(Subject::class);
    }
    public function theory(){
        return $this->hasMany(Theory::class);
    }
    public function document(){
        return $this->hasMany(Document::class);
    }
    public function test(){
        return $this->hasMany(Test::class);
    }
    public function question(){
        return $this->hasMany(QuestionBank::class);
    }

    public function unit_test(){
        return $this->hasMany(UnitTest::class,'unit_id');
    }
    public function meeting(){
        return $this->hasOne(Meeting::class,'unit_id');
    }
    public function class_meeting(){
        return $this->hasMany(Class_meeting::class,'class_id');
    }
    public function slide_video(){
        return $this->hasOne(Slide_video::class,'unit_id');
    }
    public function audio(){
        return $this->hasOne(Audio::class,'unit_id');
    }
}