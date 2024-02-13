<?php

namespace T\Charts\Facades;

use Illuminate\Support\Facades\Facade;

class Charts extends Facade
{
    protected static function getFacadeAccessor()
    {
        static::clearResolvedInstance('charts');
        return 'charts';
    }
}
