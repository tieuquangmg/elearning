<?php

namespace App\Modules\Auth\Modules;

use Illuminate\Database\Eloquent\Model;
use App\Modules\Auth\Models\User;
class Team extends Model
{
    public $table = 'teams';
    public $fillable = ['user_id', 'name', 'description'];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
