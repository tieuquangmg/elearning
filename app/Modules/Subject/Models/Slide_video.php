<?php
namespace App\Modules\Subject\Models;
use Illuminate\Database\Eloquent\Model;

class Slide_video extends Model
{
    public $table = 'slide_videos';
    public $fillable = ['name','description', 'url','unit_id','create_by'];
}
