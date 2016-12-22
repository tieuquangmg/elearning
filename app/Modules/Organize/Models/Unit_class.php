<?php

namespace App\Modules\Organize\Models;
use App\Modules\Subject\Models\Unit;
use Illuminate\Database\Eloquent\Model;

class Unit_class extends Model
{
    protected $table = 'unit_class';
    protected $fillable = ['unit_id','class_id','start_time','end_time'];
    protected $dates = ['start_time','end_time'];
    public function unit(){
        return $this->belongsTo(Unit::class,'unit_id');
    }
}