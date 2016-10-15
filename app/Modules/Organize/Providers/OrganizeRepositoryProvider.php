<?php 
namespace App\Modules\Organize\Providers; 
use App\Modules\Organize\Repositories\ClassRepository;
use App\Modules\Organize\Repositories\ClassRepositoryEloquent;
use Illuminate\Support\ServiceProvider;

class OrganizeRepositoryProvider extends ServiceProvider
{
    public function boot(){

    }
    public function register(){
        $this->app->bind(ClassRepository::class, ClassRepositoryEloquent::class);
    }
}
