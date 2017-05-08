<?php
namespace MyBuilder\widget;

class TableBuilder
{
    protected static $config;

    protected static $title;

    protected static $validation;

    protected static $topTitle;

    protected static $breadCrumbs;

    protected static $isSearch = FALSE;

    protected static $data;

    protected static $column = [];

    protected static $topBtn = [];

    protected static $rightBtn = [];

    protected static $limit = 0;

    protected static $listKey = 'id';


    public function __construct($config)
    {
        self::$config = $config;
    }

    public function setFormTitle($title)
    {
        self::$title = $title;

        return $this;
    }

    public function setTopTitle($title)
    {
        self::$topTitle = $title;

        return $this;
    }

    public function setBreadCrumbs($breadCrumbs)
    {
        self::$breadCrumbs = $breadCrumbs;

        return $this;
    }

    // 搜索默认关闭,调用本方法打开
    public function isSearch()
    {
        self::$isSearch = TRUE;
    }

    public function setData($data = [])
    {
        self::$data = $data;
    }

    // $name 名称,$value 列表字段,$type 类型,$custom 扩展,$url 本table加链接
    public function addTableColumn($name, $value, $type, $custom = [], $url)
    {
        $type = isset($type) ? $type : 'default';

        self::$column[] = ['name' => $name, 'value' => $value, 'type' => $type, 'custom' => $custom, 'url' => $url];

        return $this;
    }

    public function addTopButton($name, $value, $url, $type)
    {
        self::$topBtn[] = ['name' => $name, 'value' => $value, 'url' => $url, 'type' => $type];

        return $this;
    }

    // $type true = ajax访问 false = 直接跳转,$name 名称,$value 表单字段名,$url 要跳转的链接,$custom 获取的参数,$way 访问方式,$jump跳转地址
    public function addRightButton($type = FALSE, $name, $value, $url, $custom, $way = 'post', $jump)
    {
        self::$rightBtn[] = ['type' => $type, 'name' => $name, 'value' => $value, 'url' => $url, 'custom' => $custom, 'way' => $way, 'jump' => $jump];

        return $this;
    }

    // 设置默认的id
    public function setTableDataListKey($key)
    {
        self::$listKey = $key;

        return $this;
    }

    public function setLimit($limit)
    {
        self::$limit = $limit;

        return $this;
    }


    public function display()
    {
        include BUILDER_DIR . '/view/TableView.php';
    }
}