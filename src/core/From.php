<?php
namespace MyBuilder\core;

use MyBuilder\synergia\BuilderInterface;
use MyBuilder\synergia\Title;

class From implements BuilderInterface
{
    use Title;

    protected static $config;

    /**
     *
     * @describe 构造
     *
     * @access public
     * @see __construct()
     */
    public function __construct($config)
    {
        self::$config = $config;
    }
}