<?php

namespace App\Modules\Organize\Models;
use Illuminate\Database\Eloquent\Model;

class Unit_class extends Model
{
    protected $table = 'unit_class';
    protected $fillable = ['unit_id','class_id','start_time','end_time'];
}