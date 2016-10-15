<?php

namespace App\Modules\Media\Models;

use App\Modules\Auth\Models\User;
use Illuminate\Database\Eloquent\Model;
class News extends Model
{
    public $table = 'news';
    public $fillable = ['news_category_id', 'user_id', 'title', 'intro', 'content', 'views', 'last_view', 'active', 'type'];
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function blank($type){
        $news = new News();
        $news ->type = $type;
        $news ->user_id = auth()->user()->id;
        $news ->save();
        return $news;
    }
    
}
