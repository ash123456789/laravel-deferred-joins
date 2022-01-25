<?php

namespace Ash123456789\LaravelDeferredJoins\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ash123456789\LaravelDeferredJoins\LaravelDeferredJoins
 */
class LaravelDeferredJoins extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-deferred-joins';
    }
}
