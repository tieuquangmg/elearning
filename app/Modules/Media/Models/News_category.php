<?php

namespace App\Modules\Media\Models;

use Illuminate\Database\Eloquent\Model;
class News_category extends Model
{
    public $table = 'news_category';
    public $fillable = ['name'];

    public function news(){
        return $this->hasMany(News::class,'news_category_id');
    }
}
