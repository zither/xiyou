<?php


//判断物品是否满足
$wpsl=($iniFile->getItem($wpzzz,$wpid));
$wpsll=$wpsl+$wpkc;



if($wpsl>=1){
$q2="wp";
$strsql = "update $q2 set wpsl=$wpsll where wjid=$wjid and wpid=$wpid";//物品id号必改值
$result = mysql_query($strsql);
$iniFile->updItem($wpzzz, [$wpid => $wpsll]);

} else{

//获取最大值
$q2="wp";
$sql = "insert into $q2 (wjid,wpid,wpsl,wpfl)  values('$wjid','$wpid','$wpkc','$wwpfl')";
 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }
//更新缓存数据
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据





} 




?>
