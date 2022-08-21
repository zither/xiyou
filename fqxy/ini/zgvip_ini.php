<?php

//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="zgvip.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
if(file_exists($file)){


}else{
   //连接数据库提取数据写入ini 
   
$inina="zgvip.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
//创建文件
file_put_contents($file,"[玩家修炼]");
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);

$iniFile->addItem('尊贵vip',['初始' => 123]); 
$iniFile->addItem('尊贵vip开关',['初始' => 123]); 
include("./sql/mysql.php");//调用数据库连接 

$xlidd=1;
$q2="zgvip";
//Fixed xlid 为无效字段，修改为
$sql1=mysql_query("select zgvipid from $q2 where wjid=$wjid and zgvipid=$xlidd",$conn);
$info1=@mysql_fetch_array($sql1);
$id=$info1['zgvipid'];
if($id ==""){
$nowtime=date('Y-m-d H:i:s');	
$sql = "insert into $q2 (wjid, zgvipid,zgviptime,xs)  values('$wjid','$xlidd','$nowtime','1')";
 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }
} else{
}





$q2="zgvip";
$str="select * from $q2 where wjid=$wjid";
$result=mysql_query($str) or die('SQL语句有误');
//把有值的数据存入一个数组
$m=0;
 while(!!$row=mysql_fetch_array($result)){
$iniFile->addCategory('尊贵vip', [$row['zgvipid']=> $row['zgviptime']]);
$iniFile->addCategory('尊贵vip开关', [$row['zgvipid']=> $row['xs']]);



}







 

}
$iniFile = new iniFile($file);



?>