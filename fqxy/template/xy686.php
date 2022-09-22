<?php

/**
 * 功能说明：新任务系统入口
 */

//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");

if($zsspd==1) {
    $cs = explode('_', $npcc);
    $rwid = $cs[0];
    $rwfl = floor($rwid / 1000);
    $jsrw = $cs[1] ?? 0;

    $file = XY_DIR . '/rw/rw.php';
    if (file_exists($file)) {
        include $file;
    } else {
        echo "任务文件未找到，请联系管理员<br>";
    }

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
