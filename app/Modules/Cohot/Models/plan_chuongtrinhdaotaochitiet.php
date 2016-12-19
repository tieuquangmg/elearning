<?php

namespace App\Modules\Cohot\Models;

use Illuminate\Database\Eloquent\Model;

class plan_chuongtrinhdaotaochitiet extends Model
{
    protected $table = 'plan_chuongtrinhdaotaochitiet';
    protected $fillable = ["ID_dt_mon", "ID_dt", "ID_mon", "Ky_thu", "So_hoc_trinh", "Ly_thuyet", "Thuc_hanh", "Bai_tap", "Bai_tap_lon", "Thuc_tap", "Tu_chon", "STT_mon", "He_so", "Kien_thuc", "Khong_tinh_TBCHT", "Nhom_tu_chon", "Mon_tot_nghiep", "So_hoc_trinh_tien_quyet", "Tu_hoc", "Ma_khoa_phu_trach", "Mon_Main", "Nhom_mon_sub", "Mon_chuan_dau_ra", "HP_tuong_duong", "Ty_le_ly_thuyet", "Ty_le_thuc_hanh", "Thi_nghiem", "Thao_luan", "HocPhan_DaiCuong", "Dac_biet", "Mon_thuc_hanh", "Elearning"];
    protected $primaryKey = 'ID_dt_mon';
    public $timestamps = false;
    public function Chuongtrinhdaotao()
    {
        return $this->belongsTo(plan_chuongtrinhdaotao::class, 'ID_dt');
    }
}