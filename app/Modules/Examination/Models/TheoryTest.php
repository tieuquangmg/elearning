<?php

namespace App\Modules\Examination\Models;

use App\Modules\Auth\Models\User;
use App\Modules\Subject\Models\Theory;
use Illuminate\Database\Eloquent\Model;

class TheoryTest extends Model
{
    protected $fillable = ['theory_id', 'user_id', 'start_time', 'work_time', 'score'];
    public function theory(){
        return $this->belongsTo(Theory::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
