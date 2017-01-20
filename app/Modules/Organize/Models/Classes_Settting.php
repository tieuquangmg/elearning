<?php
namespace App\Modules\Organize\Models;
use Illuminate\Database\Eloquent\Model;

class Classes_Settting extends Model
{
    public $table = 'classes_settings';
    public $fillable = ['class_id', 'thongbao', 'thoi_gian_thi'];
    protected $dates = ['thoi_gian_thi'];
    public function classes(){
        return $this->belongsTo(Classes::class,'class_id');
    }
}