<?php

namespace App\Modules\Cohot\Models;

use Illuminate\Database\Eloquent\Model;

class Stu_lop extends Model
{
    protected $table = 'STU_Lop';
    public $primaryKey = 'ID_lop';

//    protected $fillable = ['id_sync','ten_lop','id_he','id_khoa','id_chuyen_nganh','khoa_hoc','nien_khoa','ID_dt'];
    protected $fillable = [
        'Ten_lop'
        , 'ID_he'
        , 'ID_khoa'
        , 'ID_chuyen_nganh'
        , 'Khoa_hoc'
        , 'Nien_khoa'
        , 'ID_dt'
        , 'So_sv'
        , 'Ra_truong'
        , 'Ca_hoc'
        , 'ID_phong'
        , 'Ho_ten_gv'
        , 'Dien_thoai'
        , 'Email'
        , 'Tinh_chat'
        , 'Lop_chuyen_nganh'
        , 'Lop_hanh_chinh'
    ];

    public function chuyen_nganh()
    {
        return $this->belongsTo(Stu_ChuyenNganh::class, 'id_chuyen_nganh');
    }

    public function chuongtrinhdaotao()
    {
        return $this->belongsTo(plan_chuongtrinhdaotao::class, 'ID_dt');
    }
}