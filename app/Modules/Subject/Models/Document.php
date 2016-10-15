<?php 
namespace App\Modules\Subject\Models; 
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
  public $table = 'documents';
  public $fillable = ['name','path','unit_id','create_by'];
}
