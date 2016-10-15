<?php 
namespace App\Modules\Auth\Providers; 
use App\Modules\Auth\Repositories\UserRepository;
use App\Modules\Auth\Repositories\UserRepositoryEloquent;
use Illuminate\Support\ServiceProvider;

class AuthRepositoryProvider extends ServiceProvider
{
    public function boot(){
    }
    public function register(){
        $this->app->bind(UserRepository::class, UserRepositoryEloquent::class);
    }
}