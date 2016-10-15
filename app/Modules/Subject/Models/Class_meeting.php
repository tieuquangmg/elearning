<?php
namespace App\Modules\Subject\Models;
use App\Modules\Organize\Models\Classes;
use Illuminate\Database\Eloquent\Model;

class Class_meeting extends Model
{
    public $table = 'class_meeting';
    public $fillable = ['class_id','meeting_id','attendee_pw','moderator_pw'];
    
    public function meeting(){
        return $this->belongsTo(Meeting::class,'meeting_id');
    }
    public function classes(){
        return $this->belongsTo(Classes::class,'class_id');
    }
}