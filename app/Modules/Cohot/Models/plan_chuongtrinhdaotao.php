<?php

namespace App\Modules\Cohot\Models;

use Illuminate\Database\Eloquent\Model;

class plan_chuongtrinhdaotao extends Model
{
    protected $table = 'plan_chuongtrinhdaotao';
    protected $fillable = ["ID_dt", "ID_he", " ID_khoa", " Khoa_hoc", " ID_chuyen_nganh", " So_hoc_trinh", " So_ky_hoc", " So", " created_at", " updated_at"];
    protected $primaryKey = 'ID_dt';

    public function chuongtrinhdaotaochitiet(){
        return $this->hasMany(plan_chuongtrinhdaotaochitiet::class, 'ID_dt');
    }
}