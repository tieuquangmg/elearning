<?php

namespace App\Modules\Organize\Models;

use App\Modules\Auth\Models\Nguoidung;
use App\Modules\Auth\Models\User;
use App\Modules\Subject\Models\Subject;
use App\Modules\Subject\Models\Unit;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model 
{    
    public $table = 'classes';
    protected $dates = ['start_date','end_date'];
    public $fillable = ['id_sync','name','code', "subject_id",'stt_lop', "user_id",'create_by','year','limit','start_date','end_date','semester', 'active'];
    public function student(){
        return $this->belongsToMany(User::class,'class_detail','class_id','user_id');
    }

    public function teacher(){
        return $this->belongsTo(Nguoidung::class, 'user_id');
    }

    public function subject(){
        return $this->belongsTo(Subject::class);
    }

    public function setting(){
        return $this->hasOne(Classes_Settting::class,'class_id');
    }

//    public function scopeUnitNow($query){
//        return $query->subject->unit->
//    }
}