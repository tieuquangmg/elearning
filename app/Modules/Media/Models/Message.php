<?php
namespace App\Modules\Media\Models;

use App\Modules\Auth\Models\Nguoidung;
use App\Modules\Auth\Models\User;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public $table = 'messages';
    protected $dateFormat = 'Y-m-d H:i:s';
    public $fillable = ['form', 'to', 'content', 'status'];

    public function send_from(){
//        if ($this->user_send == 0) {
//            return $this->belongsTo(User::class, 'form');
//        }
//        if ($this->user_send == 1) {
            return $this->belongsTo(Nguoidung::class, 'form');
//        }
    }

    public function send_to(){
        return $this->belongsTo(User::class, 'form');
    }

    public static function get_to_user_id($user_id){
        return self::where('to', $user_id)->where('user_recevie', 1);
    }
}