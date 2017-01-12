<?php

namespace App\Modules\Cohot\Models;

use Illuminate\Database\Eloquent\Model;

class Plan_Bomon extends Model
{
    protected $table = 'PLAN_BoMon';
    public $primaryKey = 'ID_bm';
    protected $fillable = [
        'Ma_bo_mon'
        , 'Bo_mon'
        , 'So_nhom'
        , 'ID_khoa'
    ];
}