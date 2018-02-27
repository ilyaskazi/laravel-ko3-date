<?php namespace Ko3\Date;

/**
 * @see \Ko3\Date\
 */
class DateFacade extends \Illuminate\Support\Facades\Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'date';
    }
}
