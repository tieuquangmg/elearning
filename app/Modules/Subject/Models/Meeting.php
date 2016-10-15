<?php
namespace App\Modules\Subject\Models;
use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    public $table = 'meeting';
    public $fillable = ['unit_id','name','welcome','record','meta','auto_start_recording','allow_start_top_recording'];
}