<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\ViewComposers\ExerciseComposer;
use App\Http\ViewComposers\ListTestComposer;

class ComposerProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(['edu.test.detail', 'lesson.theory.texts.data', 'exercise._include.exercise'], ExerciseComposer::class);
        view()->composer(['edu.test.detail', 'lesson.theory.texts.data', 'exercise._include.exercise'], ListTestComposer::class);

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
