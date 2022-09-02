<?php

//阻塞代码防止出现脏数据//自己的id锁
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");

$wjid1=$wjid;
$ckid=$npcc;
$wjid=$ckid;

$ininalock2=$wjid."_lock".".txt";//对方的id锁
include("./ini/ozsini.php");

if($zsspd==1&&$zsspd2==1){
    $wjid=$wjid1;

    //调用hy.ini是否存在
    include("./ini/hy_ini.php");

    //判断是否为好友
    $inina="hy.ini";
    $path='ache/'.$wjid;
    $ininame = $path."/".$inina;
    $iniFile = new iniFile($ininame);
    $ivdd=($iniFile->getItem('序列',$npcc));
    $hmivdd=($iniFile->getItem('好友分类',$ivdd));

    $wjid=$ckid;
    include("./ini/zt_ini.php");
    $inina="zt.ini";
    $path='ache/'.$wjid;
    $ininame = $path."/".$inina;
    $iniFile = new iniFile($ininame);
    $wjxx=($iniFile->getCategory('玩家信息'));
    $ckname=$wjxx['玩家名字'];

    $wjid=$wjid1;
    if($ivdd==""){
        $q2="hy";
        $sql1 = "insert into $q2 (wjid,hyid,hymz,hyfl)  values('$wjid','$ckid','$ckname','1')";
        if (!mysql_query($sql1)) {
            die('Error: ' . mysql_error());
        }

        //更新缓存数据
        $inina="hy.ini";
        $path='ache/'.$wjid;
        $ininame = $path."/".$inina;
        _unlink($ininame);
        echo "<font color=red>恭喜你！你和".$ckname."成为了好友</font>"."<br>";
    } else{
        if($hmivdd==2){
            echo "<font color=red>对不起！玩家：".$ckname."在你的黑名单内需要移除后才能加友</font>"."<br>";
        } else{
            echo "<font color=red>对不起！玩家：".$ckname."已经是你的好友了</font>"."<br>";
        }
    }

    $npcc=$ckid;
}

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=93;
$npc[]=$ckid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回$ckname</font></a>"."<br>";

//解锁当前使用的ini
include("./ini/ojsini.php");
//解锁当前使用的ini

//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini

//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
exit;

