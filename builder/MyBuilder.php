<?php
namespace Builder;

use builder\widget\FromBuilder;

class MyBuilder
{
    protected static $mount;

    public static function forms($object)
    {
        self::$mount[] = $object;

        return new FromBuilder();
    }



}