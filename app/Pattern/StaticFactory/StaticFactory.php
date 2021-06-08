<?php


namespace App\Pattern\StaticFactory;


class StaticFactory
{
    public static function view($name)
    {
        if ($name == 'one'){
            return new ItemOneStaticFactory();
        }elseif ($name == 'tow'){
            return new ItemTowStaticFactory();
        }
    }
}
