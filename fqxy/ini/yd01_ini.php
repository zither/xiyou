<?php
include("./ini/zt_ini.php");
$wjxx=($iniFile->getCategory('玩家信息'));
$file="";
//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="yd01.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;
if(!file_exists($file)) {
    $q2="all_yd01";
    $sql1=mysql_query("select * from $q2 where wjid=$wjid");
    $info1=@mysql_fetch_array($sql1);
    $ydid=$info1['wjid'];
    if($ydid ==""){
        //获取最大值
        $q2="all_yd01";
        $sql1=mysql_query("select MAX(id) from $q2");
        $abc=mysql_fetch_array($sql1);
        $maxid=$abc[0];
        if($maxid ==""){
            $maxidd=$maxid+1;
        } else{
            $maxidd=$maxid+1;
        }
        $nowtime=date('Y-m-d H:i:s');
        $wjname=$wjxx['玩家名字'];
        $wjvip = $wjxx['vip等级'];
        $sql = "insert into $q2 (id,wjid,wjmz,vip,ds01,ds02,dy01_time,yd01,yd02)  values('$maxidd','$wjid','$wjname','$wjvip','0','0','$nowtime','0','0')";
        if (!mysql_query($sql)){
            die('Error: ' . mysql_error());
        }
    }

    $q2="all_yd01";
    $sql1=mysql_query("select * from $q2 where wjid=$wjid");
    $info1=@mysql_fetch_array($sql1);
    $ds01=$info1['ds01'];
    $ds02=$info1['ds02'];
    $dy01_time=$info1['dy01_time'];
    $yd01=$info1['yd01'];
    $yd02=$info1['yd02'];

    $inina="yd01.ini";
    $path='ache/'.$wjid;
    $file = $path."/".$inina;
    file_put_contents($file,"[玩家]");


    $iniFile = new iniFile($file);
    $iniFile->addItem('摇点信息',['初始' => 123]);
    $iniFile->addCategory('摇点信息', ['今日点数' => $ds01, '活动点数' => $ds02,'摇点时间' => $dy01_time,'免费次数' => $yd01,'收费次数' => $yd02]);
}

$iniFile = new iniFile($file);