<?php 
namespace App\Modules\Subject\Models; 
use Illuminate\Database\Eloquent\Model;

class QuestionBank extends Model
{
    public $table='question_banks';
    public $fillable = ['unit_id', 'question', 'reply1', 'reply2', 'reply3', 'reply4', 'answer', 'active' ];
    public function unit(){
        return $this->belongsTo(Unit::class, 'unit_id');
    }
}
