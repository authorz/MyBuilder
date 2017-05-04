<?php
namespace MyBuilder;

use MyBuilder\widget\FromBuilder;

require_once __DIR__ . '/Common.php';

class Builder
{
    protected static $mount;

    public function __construct()
    {

    }

    public static function forms($object = NULL)
    {
        self::$mount['config'] = $object;

        if (isset(self::$mount['config'])) {
            return new FromBuilder($object);
        } else {
            $configClass = new Config();

            return new FromBuilder($configClass->config);
        }
    }
}