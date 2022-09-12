<?php

//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");

if($zsspd==1) {
    $kknpcc = $npcc;

    include XY_DIR . '/ini/xtsz_ini.php';
    $size = $iniFile->getItem('显示设置', '地图尺寸');
    $size = empty($size) ? 11 : $size;

    if ($npcc == 1) {
        $size += 2;
    } elseif ($npcc == 2) {
        $size -= 2;
    } else {
        $size = 11;
    }
    $iniFile->updItem('显示设置', ['地图尺寸' => $size]);


    include XY_DIR . '/template/xy008.php';
}

//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini
