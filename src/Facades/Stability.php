<?php

namespace TheHocineSaad\StabilityLaravel\Facades;

use Illuminate\Support\Facades\Facade;

class Stability extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'stability';
    }
}
