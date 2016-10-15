<?php

namespace App\Modules\Organize\Models;

use App\Modules\Auth\Models\User;
use App\Modules\Subject\Models\Subject;
use App\Modules\Subject\Models\Unit;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model 
{    
    public $table = 'classes';
    public $fillable = [
        "name", "subject_id", "code", "year", "user_id", 'semester', 'active'
    ];
    public function student(){
        return $this->belongsToMany(User::class,'class_detail','class_id','user_id');
    }
    public function teacher(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function subject(){
        return $this->belongsTo(Subject::class);
    }
}