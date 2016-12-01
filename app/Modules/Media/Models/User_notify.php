<?php

namespace App\Modules\Media\Models;

use Illuminate\Database\Eloquent\Model;

class User_notify extends Model
{
    protected $table = 'user_notify';

    protected $fillable = ['user_id', 'notify_id', 'status', 'date_read'];

    public function notify()
    {
        return $this->belongsTo(Notify::class, 'notify_id');
    }
}