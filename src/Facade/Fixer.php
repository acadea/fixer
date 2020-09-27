<?php

namespace Acadea\Fixer\Facade;

use Acadea\Fixer\Fixer as FixerBase;
use Illuminate\Support\Facades\Facade;

/**
 * @method static string format(string $code)
 * @see \Acadea\Fixer\Fixer
 */
class Fixer extends Facade
{
    protected static function getFacadeAccessor()
    {
        return FixerBase::class;
    }
}
