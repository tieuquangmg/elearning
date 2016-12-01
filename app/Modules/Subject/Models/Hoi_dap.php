<?php

namespace App\Modules\Subject\Models;

use App\Modules\Auth\Models\User;
use Illuminate\Database\Eloquent\Model;

class Hoi_dap extends Model
{
    protected $table = 'hoi_dap';
    protected $fillable = ['id_unit', 'ten_cau_hoi', 'id_loai', 'user_id', 'noi_dung', 'file_dinh_kem'];
    public function loai()
    {
        return $this->belongsTo(Hoi_dap_loai::class, 'id_loai');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function unit()
    {
        return $this->belongsTo(Unit::class, 'id_unit');
    }
    public function tra_loi()
    {
        return $this->hasMany(Hoi_dap_tra_loi::class, 'id_hoi_dap');
    }
}
