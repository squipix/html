<?php

namespace Squipix\Html;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Squipix\Html\FormBuilder
 */
class FormFacade extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'form';
    }
}
