<?php


$q2="cwzbb"; //数据库位置
$strsql = "update $q2 set zbid=$zbsjid where wjid=$wjid and cwid='$cwid3' and id=$npccid";//物品id号必改值
$result = mysql_query($strsql);


$npcc=$zbsjid;
include("./wp/zbxx.php");//装备信息

echo "<font color=red>得到了".$wp1."</font>"."<br>"; 

//更新缓存数据
$inina="cwzbb_".$cwid3.".ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
@_unlink($ininame); //删除文件
//更新缓存数据
//更新缓存数据
$inina="cwztt_".$cwid3.".ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
@_unlink($ininame); //删除文件
//更新缓存数据
