<?php

//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");

if($zsspd==1) {

    // 删除快捷方式缓存
    $file = sprintf('%s/ache/%d/zd.ini', XY_DIR, $wjid);
    _unlink($file);

    echo "<span>快捷方式重置成功!</span><br>";

    $cmid=$cmid+1;
    $cdid[]=$cmid;
    $clj[]=2;
    $npc[]=0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
    echo "<font color=black>----------------------</font>"."<br>";
    include("fhgame.php");
}

//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini
