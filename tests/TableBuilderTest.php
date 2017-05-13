<?php
require_once __DIR__ . '/../src/AutoLoader.php';

use MyBuilder\Builder;

$builder = Builder::tables();

// 开启搜索
$builder->openSearch();

// 设置title
$builder->setTitle('用户管理');

// 顶部标题
$builder->setTopTitle('用户列表');

// 设置唯一标示 [用于筛选操作]
$builder->setTableDataListKey('user_id');

// 面包渣导航
$builder->setBreadCrumbs(['用户', '用户管理', '用户列表']);

// 顶部导航
$builder->addTopButton(['name' => '添加', 'value' => 'add', 'url' => 'FromBuilderTest.php', 'type' => 'url']);
$builder->addTopButton(['name' => '删除', 'value' => 'del', 'url' => 'TableWay.php?way=del', 'type' => 'checkbox']);
$builder->addTopButton(['name' => '禁用', 'value' => 'disable', 'url' => 'TableWay.php?way=disable', 'type' => 'checkbox']);
$builder->addTopButton(['name' => '启用', 'value' => 'enable', 'url' => '/weichat/enable', 'type' => 'checkbox']);
#$builder->addTopButton('禁用', 'disable', '/aaa/ccc', 'checkbox');
#$builder->addTopButton('启用');

// 添加数据标示
$builder->addTableColumn(['name' => 'UserId', 'value' => 'user_id', 'type' => 'default']);
$builder->addTableColumn(['name' => '用户名', 'value' => 'username', 'type' => 'url', 'extend' => [
    'url' => 'update/user',
    'param' => [
        'id' => 'user_id',
        'name' => 'username',
        'url' => 'url'
    ]
]]);

$builder->addTableColumn(['name' => '昵称', 'value' => 'nikename', 'type' => 'default']);
$builder->addTableColumn(['name' => '性别', 'value' => 'sex', 'type' => 'default']);
$builder->addTableColumn(['name' => '爱好', 'value' => 'like', 'type' => 'default']);
$builder->addTableColumn(['name' => '生日', 'value' => 'date', 'type' => 'date']);
$builder->addTableColumn(['name' => '状态', 'value' => 'state', 'type' => 'state', 'extend' => [
    'param' => [
        0 => '正常',
        1 => '禁用'
    ]
]]);
$builder->addTableColumn(['name' => '操作', 'type' => 'btn']);

// 数据列表
$builder->addListData([
    ['user_id' => 1, 'username' => '919352865', 'nikename' => '可爱的小猪', 'sex' => '男', 'like' => '看电影,听音乐', 'date' => '1494602960', 'state' => 1],
    ['user_id' => 2, 'username' => '758883213', 'nikename' => '会飞的鲨鱼', 'sex' => '女', 'like' => '跑步,吃饭', 'date' => '1494222960', 'state' => 0],
    ['user_id' => 3, 'username' => '62556677', 'nikename' => '要死的仓鼠', 'sex' => '未知', 'like' => '打豆豆,敲代码', 'date' => '1494602960', 'state' => 1],
]);

// 数据标示 [按钮]


// 添加右侧操作按钮
$builder->addRightButton(['name' => '禁用', 'value' => 'disable', 'type' => TRUE, 'url' => 'TableWay.php?way=disable', 'custom' => ['user_id'], 'way' => 'post']);
$builder->addRightButton(['name' => '启用', 'value' => 'enable', 'type' => TRUE, 'url' => 'TableWay.php?way=disable', 'custom' => ['user_id'], 'way' => 'post']);
$builder->addRightButton(['name' => '修改', 'value' => 'update', 'type' => FALSE, 'url' => 'TableWay.php', 'custom' => ['user_id'], 'way' => 'post']);
$builder->addRightButton(['name' => '删除', 'value' => 'del', 'type' => TRUE, 'url' => 'TableWay.php?way=del', 'custom' => ['user_id'], 'way' => 'post']);
#$builder->addRightButton(TRUE, '修改', 'delete', 'message/delete', ['id', 'title'], 'get', false);
#$builder->addRightButton(TRUE, '删除', 'delete', 'message/delete', ['id', 'title'], 'get', false);

$builder->setLimit(2);

$builder->display();