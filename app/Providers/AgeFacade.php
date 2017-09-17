<?php
namespace App\Providers;

class AgeFacade extends \Illuminate\Support\Facades\Facade{
    protected static function getFacadeAccessor()
    {
        return 'dateHelper';
    }
}