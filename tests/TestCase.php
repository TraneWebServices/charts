<?php

namespace TWS\Charts\Tests;

use TWS\Charts\ChartsServiceProvider;
use Livewire\LivewireServiceProvider;
use Orchestra\Testbench\TestCase as TestbenchTestCase;

class TestCase extends TestbenchTestCase
{

    protected function getEnvironmentSetUp($app): void
    {
        $app['config']->set('database.default', 'testing');
        $app['config']->set('database.connection.testing', [
            'driver'    => 'sqlite',
            'database'  => ':memory:'
        ]);
        $app['config']->set('app.key', 'base64:Hupx3yAySikrM2/edkZQNQHslgDWYfiBfCuSThJ5SK8=');
    }

    protected function getPackageProviders($app): array
    {
        return [
            LivewireServiceProvider::class,
            ChartsServiceProvider::class,
        ];
    }

    protected function getPackageAliases($app): array
    {
        return [
            'Charts' => \TWS\Charts\Facades\Charts::class
        ];
    }

}
