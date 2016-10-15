<?php

namespace App\Modules\Examination\Models;

use App\Modules\Subject\Models\Unit;
use Illuminate\Database\Eloquent\Model;

class UnitQuestion extends Model
{
    public $fillable = ['unit_id', 'question', 'reply1', 'reply2', 'reply3', 'reply4', 'answer', 'active' ];
    public function unit(){
        return $this->belongsTo(Unit::class);
    }
}
