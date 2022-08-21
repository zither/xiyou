<?php
//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="jfdj.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
if(file_exists($file)){

} else{
	
	
$inina="jfdj.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
//创建文件
file_put_contents($file,"[玩家等级上限]");
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);

$iniFile->addItem('玩家等级上限',['上限' => 123]); 

include("./sql/mysql.php");//调用数据库连接 
	
$q2="jfdj";
$sql1=mysql_query("select id from $q2 where wjid=$wjid and jfid=1",$conn);
$info1=@mysql_fetch_array($sql1);
$xlpd=$info1['jfid'];
if($xlpd ==""){

$sql = "insert into $q2 (wjid, jfid,jfdj)  values('$wjid', '1','159')";
 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }
} else{
}


$q2="jfdj";
$sql1=mysql_query("select * from $q2 where wjid=$wjid and jfid=1",$conn);
$info1=@mysql_fetch_array($sql1);
$wjjfdj=$info1['jfdj'];



$iniFile->addItem('玩家等级上限',['上限' => $wjjfdj]); 









}






$iniFile = new iniFile($file);

	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>