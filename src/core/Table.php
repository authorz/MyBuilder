<?php
namespace MyBuilder\core;

use MyBuilder\synergia\BuilderInterface;
use MyBuilder\synergia\Title;

class Table implements BuilderInterface
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

    /**
     *
     * @describe 格式化url
     *
     * @access public
     * @see spliceUrl()
     */
    public function spliceUrl($param, $data)
    {
        if (empty($param['url'])) {
            return;
        }

        if (empty($param['param'])) {
            return;
        }

        $spliceUrl = '';

        foreach ($param['param'] as $key => $value) {
            if (isset($data[$value])) {
                $spliceUrl .= $key . '=' . $data[$value] . '&';
            } else {
                $spliceUrl .= $key . "=未找到这个值({$value})&";
            }
        }

        $spliceUrl = '?' . rtrim($spliceUrl, '&');

        return $spliceUrl;
    }

    /**
     *
     * @describe 设置状态
     *
     * @access public
     * @see setState()
     */
    public function setState($param, $data)
    {
        return $param['param'][$data];
    }
}