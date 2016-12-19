<?php 
namespace App\Modules\Subject\Models;
use App\Modules\Cohot\Models\Plan_Bomon;
use App\Modules\Organize\Models\Classes;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public $table = 'subjects';

    public $fillable = ['id','Ky_hieu', 'name', 'image', 'description','attention','id_bm','id_he_dt', 'active'];

    public function scopeWhereId($query, $input){
        if(is_array($input)) return $query->whereIn('id', $input);
        return $query->where('id', $input);
    }
    public function unit(){
        return $this->hasMany(Unit::class);
    }
    public function classes(){
        return $this->hasMany(Classes::class);
    }
    public function exam(){

    }
    public function plan_bomon(){
        return $this->belongsTo(Plan_Bomon::class,'id_bm');
    }

//    public static function updateOrCreate(array $attributes, array $values = [])
//    {
////        $instance = $this->firstOrNew($attributes);
////        $instance->fill($values);
////        $instance->save();
////        return $instance;
//    }
}
