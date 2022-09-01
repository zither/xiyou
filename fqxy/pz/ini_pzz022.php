<?php




//判断物品是否满足
$wpsl=($iniFile->getItem($wpzzz,$wpid));
$wpsll=$wpsl+$wpkc;

if($wpsl!=""){
$q2="wp";
$strsql = "update $q2 set wpsl=$wpsll where wjid=$wjid and wpid=$wpid";//物品id号必改值
$result = mysql_query($strsql);
$iniFile->updItem($wpzzz, [$wpid => $wpsll]);
} else{

//获取最大值
$npcc=$wpid;
include("./wp/wpxx.php");
$q2="wp";
$sql = "insert into $q2 (wjid,wpid,wpsl,wpfl)  values('$wjid','$npcc','$wpsll','$wpfl')";

 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }

 
 
 

if($wpfl ==1){
$inina="wp.ini";
} elseif($wpfl ==2){
$inina="cl.ini";
} elseif($wpfl ==4){
$inina="sc.ini";
} elseif($wpfl ==5){
$inina="dy.ini";
} elseif($wpfl ==6){
$inina="rw.ini";
} elseif($wpfl ==7){
$inina="nc.ini";
} elseif($wpfl ==8){
$inina="bx.ini";
} else{

}


//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
_unlink($ininame); //删除文件

 


} 

 echo "<font color=black>得到了".$wpmz."x".$wpkc."</font>"."<br>";


?>
