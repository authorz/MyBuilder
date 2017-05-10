<?php
namespace MyBuilder\widget;
/**
 *
 * @describe From 构建器
 *
 * @see class FromBuilder()
 * @author CrazyCodes <625566775@qq.com>
 * @copyright MyBuilder 2017/4/10
 * @version MyBuilder v1.0 Beta
 * @internal
 *      CrazyCodes <625566775@qq.com>
 *
 */
class FromBuilder
{
    protected static $receive;

    protected static $url;

    protected static $way;

    protected static $isAjax = FALSE;

    protected static $config;

    protected static $title;

    protected static $validation = FALSE;

    protected static $topTitle;

    protected static $breadCrumbs;

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
     * @describe 设置面包渣导航
     *
     * @access public
     * @see setBreadCrumbs()
     */
    public function setBreadCrumbs($breadCrumbs)
    {
        self::$breadCrumbs = $breadCrumbs;
    }

    /**
     *
     * @describe 生成form表单
     *
     * @access public
     * @see addFormItem()
     */
    public function addFormItem($output)
    {
        self::$receive[] = $output;

        return $this;
    }

    /**
     *
     * @describe 设置构建器标题
     *
     * @access public
     * @see setFormTitle()
     */
    public function setFormTitle($title)
    {
        self::$title = $title;

        return $this;
    }

    /**
     *
     * @describe 设置构建器顶部标题
     *
     * @access public
     * @see setTopTitle()
     */
    public function setTopTitle($title)
    {
        self::$topTitle = $title;
    }

    /**
     *
     * @describe 设置提交的地址
     *
     * @access public
     * @see setFormUrl()
     */
    public function setFormUrl($url)
    {
        self::$url = $url;

        return $this;
    }

    /**
     *
     * @describe 设置提交方式 post get
     *
     * @access public
     * @see setSubWay()
     */
    public function setSubWay($way)
    {

        self::$way = $way;

        return $this;

    }

    /**
     *
     * @describe 是否开启ajax
     *
     * @access public
     * @see isAjax()
     */
    public function isAjax()
    {
        self::$isAjax = TRUE;
    }

    /**
     *
     * @describe 是否开启验证
     *
     * @access public
     * @see openValidation()
     */
    public function openValidation()
    {
        self::$validation = TRUE;
    }

    /**
     *
     * @describe 渲染模板
     *
     * @access public
     * @see display()
     */
    public function display()
    {
        include BUILDER_DIR . '/view/FromView.php';
    }
}