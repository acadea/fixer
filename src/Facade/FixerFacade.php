<?php

namespace Acadea\Fixer\Facade;

use Acadea\Fixer\Fixer;
use Illuminate\Support\Facades\Facade;

/**
 * @method static string format(string $code)
 * @see \Acadea\Fixer\Fixer
 */
class FixerFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return Fixer::class;
    }
}
