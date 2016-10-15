<?php

namespace App\Modules\Media\Providers;
use App\Modules\Media\Repositories\NewsRepository;
use App\Modules\Media\Repositories\NewsRepositoryEloquent;
use App\Modules\Media\Repositories\GalleryRepository;
use App\Modules\Media\Repositories\GalleryRepositoryEloquent;
use App\Modules\Media\Repositories\ImageRepository;
use App\Modules\Media\Repositories\ImageRepositoryEloquent;
use App\Modules\Media\Repositories\NotifyRepository;
use App\Modules\Media\Repositories\NotifyRepositoryEloquent;
use Illuminate\Support\ServiceProvider;
class MediaRepositoryProvider extends ServiceProvider
{
    public function boot(){

    }
    public function register()
    {
        $this->app->bind( NewsRepository::class, NewsRepositoryEloquent::class );
        $this->app->bind( GalleryRepository::class, GalleryRepositoryEloquent::class );
        $this->app->bind( ImageRepository::class, ImageRepositoryEloquent::class );
        $this->app->bind( NotifyRepository::class, NotifyRepositoryEloquent::class );
    }
}