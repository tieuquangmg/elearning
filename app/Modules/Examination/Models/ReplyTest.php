<?php 
namespace App\Modules\Examination\Modules; 
use Illuminate\Database\Eloquent\Model;

class ReplyTest extends Model
{
  public $table;
  public $fillable = ['user_test_id', 'question_id', 'answer'];
}
