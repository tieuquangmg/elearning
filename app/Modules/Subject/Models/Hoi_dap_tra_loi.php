<?php

namespace App\Modules\Subject\Models;

use App\Modules\Auth\Models\Nguoidung;
use App\Modules\Auth\Models\User;
use Illuminate\Database\Eloquent\Model;

class Hoi_dap_tra_loi extends Model
{
    protected $table = 'hoi_dap_tra_loi';
    protected $fillable = ['user_id','user_type_id' ,'id_hoi_dap','file_dinh_kem','noi_dung'];

    public function hoi_dap(){
        return $this->belongsTo(Hoi_dap::class,'id_hoi_dap');
    }
    public function user_type(){
        return $this->user_type_id;
    }
    public function user(){
        if($this->user_type() == 1){
            return $this->belongsTo(Nguoidung::class,'user_id');
        }
        if($this->user_type() == 0){
            return $this->belongsTo(User::class,'user_id');
        }
    }
}
