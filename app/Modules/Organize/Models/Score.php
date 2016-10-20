<?php

namespace App\Modules\Organize\Models;
use Illuminate\Database\Eloquent\Model;
class Score extends Model
{
    public $table = 'score';
    public $fillable = [
        "user_id", "class_id", "chuyencan", "kiemtra", "thi","total"
    ];
}