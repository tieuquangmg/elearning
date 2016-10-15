<?php 
namespace App\Modules\Examination\Models;
use App\Modules\Auth\Models\User;
use App\Modules\Examination\Models\Test;
use Illuminate\Database\Eloquent\Model;

class UserTest extends Model
{
    public $table;
    public $fillable = ['user_id', 'test_id', 'start_time', 'end_time', 'score'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function test(){
        return $this->belongsTo(Test::class);
    }
}
