<?php

namespace App\Modules\Media\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model 
{
    
    public $table = 'galleries';
    public $fillable = ['name', 'created_by', 'published'];

    public function images(){
        return $this->hasMany(Image::class);
    }
}
