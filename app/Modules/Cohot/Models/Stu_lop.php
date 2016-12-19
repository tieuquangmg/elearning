<?php

namespace App\Modules\Cohot\Models;

use Illuminate\Database\Eloquent\Model;

class Stu_lop extends Model
{
    protected $table = 'stu_lop';

    protected $fillable = ['id','ten_lop','id_he','id_khoa','id_chuyen_nganh','khoa_hoc','nien_khoa','ID_dt'];

    public function chuyen_nganh(){
        return $this->belongsTo(Stu_ChuyenNganh::class,'id_chuyen_nganh');
    }
    public function chuongtrinhdaotao(){
        return $this->belongsTo(plan_chuongtrinhdaotao::class,'ID_dt');
    }
}
