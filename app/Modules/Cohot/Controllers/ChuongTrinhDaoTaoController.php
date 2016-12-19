<?php

namespace App\Modules\Cohot\Controllers;

use App\Modules\Cohot\Models\plan_chuongtrinhdaotaochitiet;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class ChuongTrinhDaoTaoController extends Controller
{
    public function getSyncChiTiet()
    {
        $data1 = DB::connection('qlsv')
            ->table('plan_chuongtrinhdaotaochitiet')
            ->chunk(100, function ($rows) {
                foreach ($rows as $row) {
                    $value = array(
                        "ID_dt" => $row->ID_dt,
                        'ID_mon' => $row->ID_mon,
                        'Ky_thu' => $row->Ky_thu,
                        'So_hoc_trinh' => $row->So_hoc_trinh,
                        'Ly_thuyet' => $row->Ly_thuyet,
                        'Thuc_hanh' => $row->Thuc_hanh,
                        'Bai_tap' => $row->Bai_tap,
                        'Bai_tap_lon' => $row->Bai_tap_lon,
                        'Thuc_tap' => $row->Thuc_tap,
                        'Tu_chon' => $row->Tu_chon,
                        'STT_mon' => $row->STT_mon,
                        'He_so' => $row->He_so,
                        'Kien_thuc' => $row->Kien_thuc,
                        'Khong_tinh_TBCHT' => $row->Khong_tinh_TBCHT,
                        'Nhom_tu_chon' => $row->Nhom_tu_chon,
                        'Mon_tot_nghiep' => $row->Mon_tot_nghiep,
                        'So_hoc_trinh_tien_quyet' => $row->So_hoc_trinh_tien_quyet,
                        'Tu_hoc' => $row->Tu_hoc,
                        'Ma_khoa_phu_trach' => $row->Ma_khoa_phu_trach,
                        'Mon_Main' => $row->Mon_Main,
                        'Nhom_mon_sub' => $row->Nhom_mon_sub,
                        'Mon_chuan_dau_ra' => $row->Mon_chuan_dau_ra,
                        'HP_tuong_duong' => $row->HP_tuong_duong,
                        'Ty_le_ly_thuyet' => $row->Ty_le_ly_thuyet,
                        'Ty_le_thuc_hanh' => $row->Ty_le_thuc_hanh,
                        'Thi_nghiem' => $row->Thi_nghiem,
                        'Thao_luan' => $row->Thao_luan,
                        'HocPhan_DaiCuong' => $row->HocPhan_DaiCuong,
                        'Dac_biet' => $row->Dac_biet,
                        'Mon_thuc_hanh' => $row->Mon_thuc_hanh,
                        'Elearning' => $row->Elearning,
                    );
                    $exists = plan_chuongtrinhdaotaochitiet::find($row->ID_dt_mon);
                    if($exists == null){
                        $bomon = plan_chuongtrinhdaotaochitiet::updateOrCreate($value,["ID_dt_mon" => $row->ID_dt_mon,]);
                    }
//                    $bomon->save();
//                    if($bomon->wasRecentlyCreated){
//                        echo 'Created successfully';
//                    } else {
//                        echo 'Already exist';
//                    }
//                    return false;
                }
            });
    }
}
