<?php
$jjdj=1;//家具等级
$jjbf=1;//家具摆放
//获取最大值
$q2="jj";
$sql = "insert into $q2 (wjid,jjid,jjdj,jjbf)  values('$wjid','$jjid','$jjdj','$jjbf')";
 if (!mysql_query($sql,$conn))
 {
   die('Error: ' . mysql_error());
 }
//更新缓存数据
$inina="jj.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件 

//更新缓存数据

?>
