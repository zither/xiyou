<?php
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
    $zbid=$npcc;
    $arr = explode("_",$npcc);
    $npcc=$arr[0];
    $npccid=$arr[1];
    $wpidd=$npcc;
    $ymzb=$npcc;

    //下一个装备阶段描述
    include("./zbdz/zbms.php");//装备描述
    $zbsjid=$ms3;

    if($npcc>=1&&$npcc<=100){
        include XY_DIR . "/zbdz/zbsj01.php";//装备描述
    } elseif($npcc>=101&&$npcc<=200){
        include XY_DIR . "/zbdz/zbsj02.php";//装备描述
    } elseif($npcc>=201&&$npcc<=300){
        include XY_DIR . "/zbdz/zbsj03.php";//装备描述
    } elseif($npcc>=301&&$npcc<=400){
        include XY_DIR . "/zbdz/zbsj04.php";//装备描述
    } elseif($npcc>=401&&$npcc<=500){
        include XY_DIR . "/zbdz/zbsj05.php";//装备描述
    } elseif($npcc>=501&&$npcc<=600){
        include XY_DIR . "/zbdz/zbsj06.php";//装备描述
    } elseif($npcc>=601&&$npcc<=700){
        include XY_DIR . "/zbdz/zbsj07.php";//装备描述
    } elseif($npcc>=701&&$npcc<=800){
        include XY_DIR . "/zbdz/zbsj08.php";//装备描述

    } else{


    }



    include("./wj/zbpost.php");


    echo "<font color=black>----------------------</font>"."<br>";
//cmd及超链接值
    include("fhgame.php");


} else{
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini


?>