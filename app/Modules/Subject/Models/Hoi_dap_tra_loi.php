<?php

namespace App\Modules\Subject\Models;

use App\Modules\Auth\Models\User;
use Illuminate\Database\Eloquent\Model;

class Hoi_dap_tra_loi extends Model
{
    protected $table = 'hoi_dap_tra_loi';
    protected $fillable = ['user_id','id_hoi_dap','file_dinh_kem','noi_dung'];

    public function hoi_dap(){
        return $this->belongsTo(Hoi_dap::class,'id_hoi_dap');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
