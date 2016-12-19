<?php

namespace App\Modules\Subject\Models;

use Illuminate\Database\Eloquent\Model;

class Scoring_method extends Model
{
    protected $table = 'tests_scoring_method';
    protected $fillable = ['name'];
}
