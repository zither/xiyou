<?php

$mysqla1 = 'mysql';
$mysqla2 = 'root';
$mysqla3 = 'root';



$mysqlroot=$mysqlroot+1;
if ($mysqlroot==1) {//符合条件爆出
//本地服务器连接
    $conn=@mysqli_connect($mysqla1,$mysqla2,$mysqla3)or die ("连接服务器失败1");
    mysqli_select_db($conn, 'xyy');

    include_once dirname(__DIR__) . "/../includes/mysql_functions.php";

    if ($wjid==10000001) {

        echo "<font color=pink>数据库调试信息----连接数据库中.......</font>"."<br>";

    } else{
    }

} else{
}


















?>