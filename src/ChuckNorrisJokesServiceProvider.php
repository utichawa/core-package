<?php

namespace Utichawa\CorePackage;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Utichawa\CorePackage\Console\ChuckNorrisJoke;
use Utichawa\CorePackage\Http\Controllers\ChuckNorrisController;

class ChuckNorrisJokesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                ChuckNorrisJoke::class,
            ]);
        }

        Route::get('chuck-norris', ChuckNorrisController::class);
    }

    public function register()
    {
        $this->app->bind('chuck-norris', function () {
            return new JokeFactory();
        });
    }
}
