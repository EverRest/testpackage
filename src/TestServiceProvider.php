<?php

namespace Probegin\Test;

use Illuminate\Support\ServiceProvider;

/**
 * Class TestServiceProvider
 *
 * @package Probegin\Test
 */
class TestServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerRoutes();
    }
    /**
     * Register the package routes.
     *
     * @return void
     */
    protected function registerRoutes()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/routes.php');
    }
}
