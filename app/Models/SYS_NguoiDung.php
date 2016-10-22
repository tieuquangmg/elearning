<?php

namespace App\Models;

use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Model;

class SYS_NguoiDung extends Model
{
    protected $connection = 'qlsv';
    public $timestamps = false;
    protected $table = 'SYS_NguoiDung';
}