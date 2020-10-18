<?php

namespace Izt\Helpers\Tests;

use Izt\Helpers\HelpersServiceProvider;

abstract class TestCase extends \Orchestra\Testbench\TestCase
{

    protected function getEnvironmentSetUp($app)
    {
        testEnviroment($app);
    }

    protected function getPackageProviders($app)
    {
        return [
            HelpersServiceProvider::class
        ];
    }

    protected function getPackageAliases($app)
    {
        return [

        ];
    }
}
