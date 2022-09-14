<?php

$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
    $npcc11=$npcc;//存值
    $pd=0;//初始
    $wpts="";//初始
    $wpdz1=[];//初始
    $wpdz2=[];//初始
    $wpdz3=[];//初始
    $wpdz4=[];//初始
    $wpdz5=[];//初始

    //提供需要扣除的物品作为判读依据
    $wpdz1[]="【黑沃土】";//名字
    $wpdz2[]=6;//物品分类
    $wpdz3[]=942;//物品id
    $wpdz4[]=200;//	需要扣除的量
    $wpdz5[]=1;//	重量

    $wpdz1[]="【仙玉露】";//名字
    $wpdz2[]=6;//物品分类
    $wpdz3[]=943;//物品id
    $wpdz4[]=200;//	需要扣除的量
    $wpdz5[]=1;//	重量

    include("./pz/ini_pzz026.php");
    $npcc=$npcc11;//返还存值
    if ($pd==2) {
        $time1=30;//施肥时间（分）
        include("./ini/zz_ini.php");
        $sftime_arr = $iniFile->getCategory('施肥时间');
        $zzid = array_key_first($sftime_arr);
        $sftime1= $sftime_arr[$zzid];

        $sftime_timestamp = strtotime($sftime1);
        $sftime_timestamp += 30 * 60;
        $q2="zz";
        $tiemxx = date("Y-m-d H:i:s", $sftime_timestamp);
        $strsql = "update $q2 set sftime='$tiemxx' where id=$zzid";
        $result = mysql_query($strsql);
        echo "<font color=black>恭喜您！！施肥成功！！（请于".$tiemxx."前来施肥否则会枯萎）</font>"."<br>";

        $cmid=$cmid+1;
        $cdid[]=$cmid;
        $clj[]=658;
        $npc[]=0;
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
    } else{
        echo "<font color=black>对不起！！施肥需要".$wpdz1[0]."x".$wpdz4[0].",".$wpdz1[1]."x".$wpdz4[1]."</font>"."<br>";
    }
    echo "<br>";

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
