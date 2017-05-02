<?php
error_reporting(E_ALL);
include_once 'index.php';

use builder\MyBuilder;

$builder = MyBuilder::forms();

$builder->setFormUrl('test.php');

$builder->setSubWay('post');

$builder->isAjax();

$builder->addFormItem(['name' => 'userid', 'type' => 'hidden', 'value' => '1']);

$builder->addFormItem(['name' => 'username', 'title' => '用户名', 'type' => 'text', 'value' => 'zhangsan']);

$builder->addFormItem(['name' => 'password', 'title' => '密码', 'type' => 'password']);

$builder->addFormItem(['name' => 'respassword', 'title' => '确认密码', 'type' => 'password']);

$builder->addFormItem(['name' => 'content', 'title' => '简介', 'type' => 'textarea']);

$builder->addFormItem(['name' => 'sex', 'title' => '性别', 'type' => 'radio', 'value' => '1', 'parameter' => [
    '0' => '女',
    '1' => '男'
]]);

$builder->addFormItem(['name' => 'like', 'title' => '喜好', 'type' => 'checkbox', 'value' => [1, 2, 3, 4], 'parameter' => [
    '0' => '打球',
    '1' => '看电影',
    '2' => '听音乐',
    '3' => '打豆豆'
]]);

$builder->addFormItem(['name' => 'likeMove', 'title' => '喜好看的电影', 'type' => 'checkbox', 'value' => [1, 2, 3, 4], 'parameter' => [
    '0' => '速1',
    '1' => '速2',
    '2' => '速3',
    '3' => '速4'
]]);

$builder->addFormItem(['name' => 'city', 'title' => '所在城市', 'type' => 'select', 'value' => [1, 2, 3, 4], 'parameter' => [
    '0' => '北京',
    '1' => '上海',
    '2' => '山东',
    '3' => '内蒙古'
]]);


$builder->display();


if ($_POST) {
    var_dump($_POST);
}

