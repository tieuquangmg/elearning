<?php

namespace App\Modules\Lesson\Models;

use Illuminate\Database\Eloquent\Model;


class Vocabulary extends Model 
{
    

    public $table = 'vocabularies';
    public $fillable = ['unit_id', 'word', 'mean', 'image'];

}
