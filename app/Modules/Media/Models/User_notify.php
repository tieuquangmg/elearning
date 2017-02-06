<?php

namespace App\Modules\Media\Models;

use App\Modules\Auth\Models\Nguoidung;
use App\Modules\Auth\Models\User;
use Illuminate\Database\Eloquent\Model;

class User_notify extends Model
{
    protected $table = 'user_notify';
    protected $fillable = ['user_id', 'user_type_id', 'notify_id', 'status', 'date_read'];
    protected $dateFormat = 'Y-m-d H:i:s';

    public function notify()
    {
        return $this->belongsTo(Notify::class, 'notify_id');
    }

    public function user_type()
    {
        return $this->user_type_id;
    }

    public function user()
    {
        if ($this->user_type() == 1) {
            return $this->belongsTo(User::class, 'user_id');
        }
        if ($this->user_type() == 0) {
            return $this->belongsTo(Nguoidung::class, 'user_id');
        }
    }
}