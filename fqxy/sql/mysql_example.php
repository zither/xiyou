<?php

$mysql_host = 'mysql';
$mysql_user = 'root';
$mysql_password = 'root';
$mysql_database = 'xyy';

$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database) or die ("连接服务器失败1");
mysqli_query($conn, "set names utf8");
include_once dirname(__DIR__) . "/../includes/wrappers.php";
