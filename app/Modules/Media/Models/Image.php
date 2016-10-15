<?php

namespace App\Modules\Media\Models;

use App\Modules\Auth\Models\User;
use Illuminate\Database\Eloquent\Model;

class Image extends Model 
{
    
    public $table = 'images';
    public $fillable = ['gallery_id', 'file_name', 'file_size', 'file_mime', 'file_path', 'create_by'];

    public function gallery(){

        return $this->belongsTo(Gallery::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }

}
