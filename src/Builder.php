<?php
namespace MyBuilder;

use Mybuilder\widget\FromBuilder;

class Builder
{
    protected static $mount;

    public static function forms($object)
    {
        self::$mount[] = $object;

        return new FromBuilder();
    }
}