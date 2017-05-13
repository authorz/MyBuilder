<?php

if ($_GET['way'] == 'del') {
    die(json_encode(['code' => 200, 'message' => '操作成功']));
}

if ($_GET['way'] == 'disable') {
    die(json_encode(['code' => 0, 'message' => '操作失败']));
}