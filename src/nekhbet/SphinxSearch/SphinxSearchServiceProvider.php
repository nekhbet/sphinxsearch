<?php

namespace nekhbet\SphinxSearch;

use Illuminate\Support\ServiceProvider;

class SphinxSearchServiceProvider extends ServiceProvider
{

    protected $defer = false;

    public function register()
    {
        $this->app->singleton('sphinxsearch', function ($app) {
            return new SphinxSearch;
        });
    }


    public function boot()
    {
        $this->publishes([
            __DIR__.'/../../config/sphinxsearch.php' => config_path('sphinxsearch.php'),
        ], 'config');
    }

}
