<?php
namespace App\Modules\Subject\Models;
use Illuminate\Database\Eloquent\Model;

class Audio extends Model
{
    public $table = 'audios';
    public $fillable = ['name','description', 'url','unit_id','create_by'];
}
