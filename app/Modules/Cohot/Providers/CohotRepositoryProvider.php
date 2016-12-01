<?php
namespace App\Modules\Cohot\Providers;
use App\Modules\Cohot\Repositories\BoMonRepository;
use App\Modules\Cohot\Repositories\BoMonRepositoryEloquent;
use App\Modules\Cohot\Repositories\ChuyenNganhRepository;
use App\Modules\Cohot\Repositories\ChuyenNganhRepositoryEloquent;
use App\Modules\Cohot\Repositories\LopRepository;
use App\Modules\Cohot\Repositories\LopRepositoryEloquent;
use Illuminate\Support\ServiceProvider;

class CohotRepositoryProvider extends ServiceProvider
{
    public function boot(){
    }

    public function register(){
        $this->app->bind(LopRepository::class, LopRepositoryEloquent::class);
        $this->app->bind(ChuyenNganhRepository::class, ChuyenNganhRepositoryEloquent::class);
        $this->app->bind(BoMonRepository::class, BoMonRepositoryEloquent::class);
    }
}
