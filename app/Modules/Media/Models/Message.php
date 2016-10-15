<?php
namespace App\Modules\Media\Models;
use App\Modules\Auth\Models\User;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public $table='messages';
    public $fillable = ['from', 'to', 'content'];

    public function send_from(){
        return $this->belongsTo(User::class,'form');
    }
}
