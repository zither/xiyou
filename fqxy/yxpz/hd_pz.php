<?php
//添加新数据

$nowtime=date('Y-m-d H:i:s');
include("./sql/mysql.php");//调用数据库连接 
$q2="hd";
$sql = "insert into $q2 (wjid,hdid,hdtime,hdcs)  values('$wjid','$npcc','$nowtime','0')";
 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }
//路径
$inina="hd.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
_unlink($ininame); //删除文件


?>