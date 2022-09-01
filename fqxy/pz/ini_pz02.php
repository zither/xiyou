<?php

echo "<font color=black>得到了".$wwpmz."x".$wwpsl."</font><br>";
$wjwp=($iniFile->getItem($wpzzz,$wwpid));
if($wjwp >=1){
    $xwpsl=$wjwp+$wwpsl;
    include("./sql/mysql.php");//调用数据库连接
    $strsql = "update $q2 set wpsl=$xwpsl where wjid=$wjid and wpid=$wwpid";//物品id号必改值
    $result = mysql_query($strsql);
    //数据库修改
    //缓存修改
    $iniFile->updItem($wpzzz, [$wwpid => $xwpsl]);
    //缓存修改
} else{
    include("./sql/mysql.php");//调用数据库连接
    //新增数据
    $sql = "insert into $q2 (wjid,wpid,wpsl,wpfl)  values($wjid,$wwpid,$wwpsl,$wwpfl)";
    if (!mysql_query($sql,$conn)) {
        die('Error: ' . mysql_error());
    }
    //新增数据
    //更新缓存数据
   _unlink($ininame); //删除文件
    //更新缓存数据
}
