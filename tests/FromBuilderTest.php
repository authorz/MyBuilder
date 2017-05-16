<?php
require_once __DIR__ . '/../src/AutoLoader.php';

use MyBuilder\Builder;

$builder = Builder::forms();
$builder->setSubWay('post');
$builder->setFormUrl('TableWay.php');
$builder->openValidation();
$builder->setBreadCrumbs();
$builder->setTopTitle();
$builder->setTitle('用户管理');

$builder->addFormItem(['name' => 'userid', 'type' => 'hidden', 'value' => '1']);

$builder->addFormItem(['name' => 'username', 'title' => '用户名', 'type' => 'text', 'value' => 'zhangsan']);

$builder->addFormItem(['name' => 'password', 'title' => '密码', 'type' => 'password']);

$builder->addFormItem(['name' => 'respassword', 'title' => '确认密码', 'type' => 'password']);

$builder->addFormItem(['name' => 'content', 'title' => '简介', 'type' => 'textarea']);

$builder->addFormItem(['name' => 'me', 'title' => '个人说明', 'type' => 'ueditor', 'value' => '张珍是个小逗比']);
$builder->addFormItem(['name' => 'my', 'title' => 'my', 'type' => 'ueditor', 'value' => 'my']);

$builder->addFormItem(['name' => 'img', 'title' => '头像', 'type' => 'upload', 'value' => 'my']);
$builder->addFormItem(['name' => 'head', 'title' => '个人解决', 'type' => 'upload', 'value' => 'my']);

$builder->addFormItem(['name' => 'sex', 'title' => '性别', 'type' => 'radio', 'value' => '1', 'parameter' => [
    '0' => '女',
    '1' => '男'
]]);

$builder->upload([
    'upload_url' => 'upload.php',
    'delete_url' => 'del.php'
]);


$builder->display();