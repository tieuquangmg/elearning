<?php 
namespace App\Modules\Security\Providers; 
use App\Modules\Security\Repositories\PermissionRepository;
use App\Modules\Security\Repositories\PermissionRepositoryEloquent;
use App\Modules\Security\Repositories\RoleRepository;
use App\Modules\Security\Repositories\RoleRepositoryEloquent;
use Illuminate\Support\ServiceProvider; 

class SecurityRepositoryProvider extends ServiceProvider
{
    public function boot(){
    }
    public function register(){
        $this->app->bind(RoleRepository::class, RoleRepositoryEloquent::class);
        $this->app->bind(PermissionRepository::class, PermissionRepositoryEloquent::class);
    }
}
