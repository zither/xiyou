<?php

//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="yl.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;
if(file_exists($file)) {

} else {
    //连接数据库提取数据写入ini
    include("./sql/mysql.php");//调用数据库连接
    $q2="all_yl";
    $sql1=mysql_query("select * from $q2 where wjid=$wjid",$conn);
    $info1=@mysql_fetch_array($sql1);
    $bbyl=$info1['bbyl'];
    $ckyl=$info1['ckyl'];

    if($bbyl==""){
        $bbyl=0;
    }
    if($ckyl==""){
        $ckyl=0;
    }
    if($bbyl==""&&$ckyl==""){
        $sql = "insert into $q2 (wjid,bbyl,ckyl)  values($wjid,$bbyl,$ckyl)";
        if (!mysql_query($sql,$conn)) {
            die('Error: ' . mysql_error());
        }
    }

    $inina="yl.ini";
    $path='ache/'.$wjid;
    $file = $path."/".$inina;
    file_put_contents($file,"[玩家]");

    $iniFile = new iniFile($file);
    $iniFile->addItem('背包仓库银两',['初始' => 123]);
    $iniFile->addCategory('背包仓库银两', ['背包银两' => $bbyl, '仓库银两' => $ckyl]);
    $iniFile->addItem('背包页面',['页面id' => $cmdd]);
}

$iniFile = new iniFile($file);
