<?php

namespace App\Modules\Cohot\Models;

use Illuminate\Database\Eloquent\Model;

class Stu_ChuyenNganh extends Model
{
    protected $table = 'STU_ChuyenNganh';
    protected $fillable = ['ID_chuyen_nganh','Ma_chuyen_nganh','Chuyen_nganh','ID_nganh','Chuyen_nganh_En','Ky_thuat'];
}