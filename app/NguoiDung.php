<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NguoiDung extends Model
{
    protected $connection = 'qlsv';

    protected $table = 'STU_DanhSachLopTinChi';
//    protected $table = 'SYS_NguoiDung';
}