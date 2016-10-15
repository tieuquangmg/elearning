<?php 
namespace App\Modules\Media\Models; 
use Illuminate\Database\Eloquent\Model;

class Notify extends Model
{
    public $table='notifies';
    public $fillable = ['title', 'content', 'create_by'];

    public function scopeIsDelete($query, $input){
        if(is_array($input)) return $query->whereIn('id', $input)->delete();
        return $query->where('id', $input)->delete();
    }
}
