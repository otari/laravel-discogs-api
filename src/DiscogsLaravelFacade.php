<?php


namespace Otsilosani\DiscogsLaravel;

use Illuminate\Support\Facades\Facade;


class DiscogsLaravelFacade extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'discogs';
    }
}