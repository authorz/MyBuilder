<?php
require_once __DIR__ . '/../src/AutoLoader.php';

use MyBuilder\Builder;

$builder = Builder::tables();

$builder->display();