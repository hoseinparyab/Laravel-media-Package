<?php

namespace Theparyab\LaravelMedia\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;
use Theparyab\LaravelMedia\LaravelMediaServiceProvider;

class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            LaravelMediaServiceProvider::class,
        ];
    }

}