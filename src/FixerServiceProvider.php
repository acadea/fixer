<?php

namespace Acadea\Fixer;

use Illuminate\Support\ServiceProvider;

class FixerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/fixer.php' => config_path('fixer.php'),
            ], 'config');
        }
    }

    public function register()
    {
        $this->app->singleton(Fixer::class, function ($app){
            return new Fixer();
        });

        $this->mergeConfigFrom(__DIR__ . '/../config/fixer.php', 'fixer');
    }
}
