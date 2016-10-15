<?php 
namespace App\Modules\Subject\Models;
use App\Modules\Organize\Models\Classes;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public $table = 'subjects';

    public $fillable = ['name', 'image', 'description', 'active'];

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
}
