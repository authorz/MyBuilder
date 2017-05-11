<?php
require_once __DIR__ . '/../src/AutoLoader.php';

use MyBuilder\Builder;

$builder = Builder::forms();

$builder->setSubWay('get');

$builder->setFormTitle('用户管理');

$builder->display();