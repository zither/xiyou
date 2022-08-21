<?php

$mysqla1 = 'mysql';
$mysqla2 = 'root';
$mysqla3 = 'root';

//本地服务器连接
$conn=mysqli_connect($mysqla1, $mysqla2,$mysqla3)or die ("连接服务器失败2");
mysqli_select_db($conn, 'xxjyuser');
include_once dirname(__DIR__) . "/includes/mysql_functions.php";
mysql_query("set names utf8");
