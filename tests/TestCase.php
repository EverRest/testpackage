<?php

namespace Communiq\Locations\Tests;

use Communiq\Locations\TestServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    /**
     * @param \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getLocationsProviders($app)
    {
        return [
            TestServiceProvider::class,
        ];
    }
}
