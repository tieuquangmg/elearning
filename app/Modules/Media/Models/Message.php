<?php
namespace App\Modules\Media\Models;

use App\Modules\Auth\Models\Nguoidung;
use App\Modules\Auth\Models\User;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public $table = 'messages';
//    protected $dateFormat = 'Y-m-d H:i:s';
    public $fillable = ['user_send', 'user_recevie', 'form', 'to', 'content', 'status'];

    public function sender(){
        return $this->user_send;
    }
    public function receder(){
        return $this->user_recevie;
    }
    public function send_from(){
        if ($this->sender() == 0){
            return $this->belongsTo(User::class, 'form');
        }
        if ($this->sender() == 1){
            return $this->belongsTo(Nguoidung::class, 'form');
        }
    }

    public function send_to(){
        if($this->receder() == 0){
            return $this->belongsTo(User::class, 'to');
        }
        if ($this->receder() == 1){
            return $this->belongsTo(Nguoidung::class, 'to');
        }
    }

    public static function get_to_user_id($user_id){
        return self::where('to', $user_id)->where('user_recevie', 1);
    }
}