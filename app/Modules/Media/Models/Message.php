<?php
namespace App\Modules\Media\Models;
use App\Modules\Auth\Models\User;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public $table='messages';
    public $fillable = ['form','to','content','status'];

    public function send_from(){
        return $this->belongsTo(User::class,'form');
    }
    public function send_to(){
        return $this->belongsTo(User::class,'form');
    }
}
