<?php

namespace AmineTiyal\MicrosoftClarity\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AmineTiyal\MicrosoftClarity\MicrosoftClarity
 */
class MicrosoftClarity extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \AmineTiyal\MicrosoftClarity\MicrosoftClarity::class;
    }
}
