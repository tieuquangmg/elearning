<?php 
namespace App\Modules\Organize\Providers; 
use Illuminate\Contracts\Auth\Access\Gate as GateContract; 
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider; 

class OrganizeAuthProvider extends ServiceProvider
{
   protected $policies = [];
   public function boot(GateContract $gate){
$this->registerPolicies($gate);   
}
}
