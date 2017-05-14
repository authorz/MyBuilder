<?php
require_once __DIR__ . '/../src/AutoLoader.php';

use MyBuilder\Builder;

$builder = Builder::forms();

$builder->setSubWay('get');
$builder->setBreadCrumbs();
$builder->setTopTitle();
$builder->setTitle('用户管理');

$builder->addFormItem(['name' => 'userid', 'type' => 'hidden', 'value' => '1']);

$builder->addFormItem(['name' => 'username', 'title' => '用户名', 'type' => 'text', 'value' => 'zhangsan']);

$builder->addFormItem(['name' => 'password', 'title' => '密码', 'type' => 'password']);

$builder->addFormItem(['name' => 'respassword', 'title' => '确认密码', 'type' => 'password']);

$builder->addFormItem(['name' => 'content', 'title' => '简介', 'type' => 'textarea']);

$builder->addFormItem(['name' => 'sex', 'title' => '性别', 'type' => 'radio', 'value' => '1', 'parameter' => [
    '0' => '女',
    '1' => '男'
]]);


$builder->display();