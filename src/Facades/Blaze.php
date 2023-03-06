<?php

namespace Stevemo\Blaze\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Stevemo\Blaze\Blaze
 */
class Blaze extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Stevemo\Blaze\Blaze::class;
    }
}
