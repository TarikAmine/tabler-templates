<?php

namespace Kirat\TablerTemplates;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class TablerTemplatesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../views', 'tabler-templates');
        $this->publishes([
            __DIR__ . '/../views' => base_path('resources/views/vendor/tabler-templates')
        ]);

        Paginator::defaultView('tabler-templates::common.paginator');
        Paginator::defaultSimpleView('tabler-templates::common.simple_paginator');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
