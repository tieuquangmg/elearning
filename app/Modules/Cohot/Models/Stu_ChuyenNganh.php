<?php

namespace App\Modules\Cohot\Models;

use Illuminate\Database\Eloquent\Model;

class Stu_ChuyenNganh extends Model
{
    protected $table = 'stu_chuyennganh';
    protected $fillable = ['id','ma_chuyen_nganh','chuyen_nganh','id_nganh'];
}