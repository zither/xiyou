<?php

/**
 * 传送玩家到指定坐标
 */

//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");

if($zsspd==1) {
    $kknpcc = $npcc;
    $arr = explode('_', $npcc);
    if (count($arr) == 2) {
        wjyd($wjid, (int)$arr[0], (int)$arr[1]);
    }
    include XY_DIR . '/template/xy002.php';
}

//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini
