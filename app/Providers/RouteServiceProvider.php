<?php

namespace App\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to the controller routes in your routes file.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function boot(Router $router)
    {
        parent::boot($router);
    }

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function map(Router $router)
    {
        $router->group(['namespace' => $this->namespace], function ($router) {
            require app_path('Http/routes.php');
        });

        $router->group(['namespace' => 'App\Modules\Exercise\Controllers'], function ($router) {
            require app_path('Modules/Exercise/routes.php');
        });

        $router->group(['namespace' => 'App\Modules\Examination\Controllers'], function ($router) {
            require app_path('Modules/Examination/routes.php');
        });

        $router->group(['namespace' => 'App\Modules\Media\Controllers'], function ($router) {
            require app_path('Modules/Media/routes.php');
        });

        $router->group(['namespace' => 'App\Modules\Auth\Controllers'], function ($router) {
            require app_path('Modules/Auth/routes.php');
        });

        $router->group(['namespace' => 'App\Modules\Security\Controllers'], function ($router) {
            require app_path('Modules/Security/routes.php');
        });

        //--------------> Organize
        $router->group(['namespace' => 'App\Modules\Organize\Controllers'], function ($router) {
            require app_path('Modules/Organize/routes.php');
        });
        //--------------> Exam
        $router->group(['namespace' => 'App\Modules\FrontEnd\Controllers'], function ($router) {
            require app_path('Modules/FrontEnd/routes.php');
        });

        $router->group(['namespace' => 'App\Modules\Subject\Controllers'], function ($router) {
            require app_path('Modules/Subject/routes.php');
        });

        $router->group(['namespace' => 'App\Modules\Cohot\Controllers'], function ($router) {
            require app_path('Modules/Cohot/routes.php');
        });
    }
}
