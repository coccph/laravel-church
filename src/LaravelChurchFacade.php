<?php

namespace coccph\LaravelChurch;

use Illuminate\Support\Facades\Facade;

/**
 * @see \coccph\LaravelChurch\LaravelChurch
 */
class LaravelChurchFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-church';
    }
}
