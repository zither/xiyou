<?php

$ininalock=$wjid."_lock".".txt";
include(XY_DIR . "/ini/zsini.php");
if($zsspd==1){
    include(XY_DIR . "/ini/zz_ini.php");
    $zzdj_arr = $iniFile->getCategory('种植等级');
    $zzid = array_key_first($zzdj_arr);
    $zzdj = $zzdj_arr[$zzid];

    if($zzdj<5){
        $npcc11=$npcc;//存值
        $pd=0;//初始
        $wpts="";//初始
        $wpdz1=[];//初始
        $wpdz2=[];//初始
        $wpdz3=[];//初始
        $wpdz4=[];//初始
        $wpdz5=[];//初始
        //提供需要扣除的物品作为判读依据
        $wpdz1[]="〖紫星币〗";//名字
        $wpdz2[]=4;//物品分类
        $wpdz3[]=944;//物品id
        $wpdz4[]=10;//	需要扣除的量
        $wpdz5[]=1;//	重量
        include(XY_DIR . "/pz/ini_pzz026.php");
        $npcc=$npcc11;//返还存值
        if ($pd==2) {
            $time1=30;//施肥时间（分）
            $q2="zz";
            $bz= rand(1, 10);
            if($bz>=6){
                $zzdj=$zzdj+1;
                echo "<font color=black>恭喜您！！种植产物升级成功！！</font>"."<br>";
            } else{
                $zzdj=$zzdj-1;
                echo "<font color=black>很遗憾！！种植产物升级失败了！！</font>"."<br>";
            }
            if($zzdj<1){
                $zzdj=1;
            }
            $strsql = "update $q2 set zzdj='$zzdj' where id=$zzid";//物品id号必改值
            $result = mysql_query($strsql);

            $cmid=$cmid+1;
            $cdid[]=$cmid;
            $clj[]=658;
            $npc[]=0;
            echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
        } else{
            echo "<font color=black>对不起！！升级需要".$wpdz1[0]."x".$wpdz4[0]."</font>"."<br>";
        }
    } else{
        echo "<font color=red>土豪大佬膜拜一下~~~种植产物等级已经满了（上限5级）</font>"."<br>";

        $cmid=$cmid+1;
        $cdid[]=$cmid;
        $clj[]=658;
        $npc[]=0;
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
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

