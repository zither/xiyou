<?php

$npcc1=$npcc;
$npcc=$zbid;//赋值
include("./wp/zbxx.php");//调用装备信息
$q2="zb";
include("./sql/mysql.php");//调用数据库连接

$zbcc1=0;
$zbcc2=0;
$zbcc3=0;
$zbcc4=0;
$zbcc5=0;
$zbcc6=0;
$zbcc7=0;
$zbcc8=0;
$zbcc9=0;
$zbcc10=0;
$zbcc11=0;
$zbcc12=0;
$sql1 = "insert into $q2 (wjid,zbid,zbxj,zbk1,zbxq1,zbk2,zbxq2,zbk3,zbxq3,zbk4,zbxq4,zbk5,zbxq5,zbpd)  values('$wjid','$zbid','$zbcc1','$zbcc2','$zbcc3','$zbcc4','$zbcc5','$zbcc6','$zbcc7','$zbcc8','$zbcc9','$zbcc10','$zbcc11','$zbcc12')";
 if (!mysql_query($sql1,$conn))
 {
   die('Error: ' . mysql_error());
 }	
$npcc=$npcc1;
echo "<font color=black>得到了".$wp1."</font>"."<br>"; 
//更新缓存数据
$inina="zb.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据

?>
