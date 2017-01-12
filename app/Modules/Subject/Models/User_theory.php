<?php
namespace App\Modules\Subject\Models;
use Illuminate\Database\Eloquent\Model;

class User_theory extends Model
{
    public $table = "user_theory";
    public $fillable = ['user_id', 'theory_id', 'start_time', 'watch_time'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function theory(){
        return $this->belongsTo(Theory::class);
    }
}