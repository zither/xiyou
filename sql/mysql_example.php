<?php

include_once __DIR__ . '/../includes/db.php';

$mysql_host = 'mysql';
$mysql_user = 'root';
$mysql_password = 'root';
$mysql_database = 'xxjyuser';

$conn = DB::init($mysql_host, $mysql_user, $mysql_password, $mysql_database);

include_once __DIR__ . "/../includes/wrappers.php";
