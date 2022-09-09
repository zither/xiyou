<?php

//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");

if($zsspd==1) {
    $sl = $npcc;
    $db = DB::instance();
    $zqjf = $db->get('all_hdph01', 'ds01', ['wjid' => $wjid]);
    if ($zqjf > 10 * $sl) {
        //获得一个桂花糕
        hdwp($wjid, 740, $sl);
        //扣除活动积分
        $db->update('all_hdph01', ['ds01[-]' => 10 * $sl], ['wjid' => $wjid]);
    } else {
        echo "<span style='color: red'>中秋积分不足，兑换失败</span><br>";
    }

    $cmid=$cmid+1;
    $cdid[]=$cmid;
    $clj[]=7;
    $npc[]=1080;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回嫦娥姐姐</font></a>"."<br>";
    echo "<font color=black>----------------------</font>"."<br>";
    include("fhgame.php");
}

//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini
