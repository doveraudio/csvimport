<?php namespace Jleach\Dataimport\Facades;

use Illuminate\Support\Facades\Facade;

class Dataimport extends Facade{
/**
*
*Get the registered name of the component
*
*
*	@return string
*
*/
public static function getFacadeAccessor(){
    return 'dataimport';
    }

}