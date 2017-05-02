<?php
namespace builder\widget;

class FromBuilder
{
    protected static $receive;

    protected static $url;

    protected static $way;

    protected static $isAjax = FALSE;

    public function addFormItem($output)
    {
        self::$receive[] = $output;

        return $this;
    }


    public function setFormUrl($url)
    {
        self::$url = $url;

        return $this;
    }

    public function setSubWay($way)
    {

        self::$way = $way;

        return $this;

    }

    public function isAjax()
    {
        self::$isAjax = TRUE;
    }


    public function display()
    {
        include BASEDIR . '/builder/view/FromView.php';
    }
}