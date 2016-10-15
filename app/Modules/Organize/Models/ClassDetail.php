<?php 
namespace App\Modules\Organize\Models; 
use Illuminate\Database\Eloquent\Model;

class ClassDetail extends Model
{
  public $table = 'class_detail';
  public $fillable = ['user_id', 'class_id'];
}
