<?php
/**
 * Created by PhpStorm.
 * User: FightLightDiamond
 * Date: 6/8/2016
 * Time: 10:46 AM
 */

namespace App\Modules\Exercise\Models;
use Illuminate\Database\Eloquent\Model;

class TrueFalse extends Model 
{
    
    protected $table = 'true_false';
    public $fillable = ['question_id', 'answer'];
    public function question(){
        return $this->belongsTo(Question::class);
    }
}