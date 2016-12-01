<?php 
namespace App\Modules\Media\Providers; 
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
class MediaAuthProvider extends ServiceProvider
{
    protected $policies = [];
    public function boot(GateContract $gate){
        $this->registerPolicies($gate);
    }
    public function register(){
    }
}