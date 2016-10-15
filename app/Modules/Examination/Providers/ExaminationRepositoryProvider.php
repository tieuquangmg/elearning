<?php 
namespace App\Modules\Examination\Providers; 
use App\Modules\Examination\Repositories\TestDetailRepository;
use App\Modules\Examination\Repositories\TestDetailRepositoryEloquent;
use App\Modules\Examination\Repositories\TestRepository;
use App\Modules\Examination\Repositories\TestRepositoryEloquent;
use Illuminate\Support\ServiceProvider;
use App\Modules\Examination\Repositories\MiniTestRepository;
use App\Modules\Examination\Repositories\MiniTestRepositoryEloquent;

class ExaminationRepositoryProvider extends ServiceProvider
{
    public function boot(){
    }
    public function register(){
        $this->app->bind(TestRepository::class, TestRepositoryEloquent::class);
        $this->app->bind(TestDetailRepository::class, TestDetailRepositoryEloquent::class);
        $this->app->bind(MiniTestRepository::class, MiniTestRepositoryEloquent::class);
    }
}
