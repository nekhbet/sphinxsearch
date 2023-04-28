<?php

namespace Nekhbet\SphinxSearch;

use Illuminate\Support\ServiceProvider;

class SphinxSearchServiceProvider extends ServiceProvider
{

    protected bool $defer = false;

    public function register()
    {
        //
    }


    public function boot()
    {
        $this->publishes([
            __DIR__.'/../../config/sphinxsearch.php' => $this->config_path('sphinxsearch.php'),
        ], 'config');
    }

    public function provides()
    {
        return [];
    }

    private function config_path($path = '')
    {
        return function_exists('config_path') ? config_path($path) : app()->basePath().DIRECTORY_SEPARATOR.'config'.($path ? DIRECTORY_SEPARATOR.$path : $path);
    }

}
