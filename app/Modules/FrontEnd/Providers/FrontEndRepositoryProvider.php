<?php 
namespace App\Modules\FrontEnd\Providers; 
use App\Modules\FrontEnd\Repositories\DashBoardRepository;
use App\Modules\FrontEnd\Repositories\DashBoardRepositoryEloquent;
use App\Modules\FrontEnd\Repositories\ProfileRepository;
use App\Modules\FrontEnd\Repositories\ProfileRepositoryEloquent;
use Illuminate\Support\ServiceProvider;

class FrontEndRepositoryProvider extends ServiceProvider
{
    public function boot(){
    }
    public function register(){
        $this->app->bind(DashBoardRepository::class, DashBoardRepositoryEloquent::class);
        $this->app->bind(ProfileRepository::class, ProfileRepositoryEloquent::class);
    }
}
