<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class STU_DanhSach extends Model
{
    protected $connection = 'qlsv';
    protected $primaryKey = 'ID_sv';
    protected $table = 'STU_DanhSach';
    public $timestamps  = false;

    protected $fillable = ['Mat_khau'];
}