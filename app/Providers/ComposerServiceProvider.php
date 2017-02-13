<?php

namespace App\Providers;

use App\Http\ViewComposers\BomonComposer;
use App\Http\ViewComposers\KhoaComposer;
use App\Http\ViewComposers\PhongComposer;
use Auth, View;
use Illuminate\Support\ServiceProvider;
use App\Http\ViewComposers\NotifyComposer;
class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer([
            'frontend.nguoidung._modules.nav_db',
            'frontend.dasdboard._modules.nav_db'
            ], NotifyComposer::class);
        view()->composer(['auth.nguoidung.update'],BomonComposer::class);
        view()->composer(['auth.nguoidung.update'],KhoaComposer::class);
        view()->composer(['auth.nguoidung.update'],PhongComposer::class);
    }
    public function register()
    {

    }
}