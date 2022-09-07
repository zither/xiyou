<?php

include_once ROOT . '/includes/db.php';
include_once ROOT . "/includes/wrappers.php";

$configs = include JY_CONFIG_DIR . '/config.php';
$db_configs = $configs['mysql'];
$conn = DB::init($db_configs['host'], $db_configs['user'], $db_configs['password'], $db_configs['database']);
