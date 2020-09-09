<?php

namespace Acadea\Fixer;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Acadea\Fixer\Fixer
 */
class FixerFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'fixer';
    }
}
