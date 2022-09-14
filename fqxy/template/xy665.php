<?php
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
    include("./ini/zz_ini.php");
    $zzdj_arr = $iniFile->getCategory('种植等级');
    $zzwpid_arr = $iniFile->getCategory('种植物品');
    $zztime_arr = $iniFile->getCategory('种植时间');
    $sftime_arr = $iniFile->getCategory('施肥时间');
    $shtime_arr = $iniFile->getCategory('收获时间');
    $zzwpmz_arr = $iniFile->getCategory('种植名字');
    $zzwpsl_arr = $iniFile->getCategory('种植数量');

    $zzid = array_key_first($zzdj_arr);

    $zzdj = $zzdj_arr[$zzid];
    $zzwpid = $zzwpid_arr[$zzid];
    $zztime = $zztime_arr[$zzid];
    $sftime = $sftime_arr[$zzid];
    $shtime = $shtime_arr[$zzid];
    $zzwpmz = $zzwpmz_arr[$zzid];
    $zzwpsl = $zzwpsl_arr[$zzid];

    $sl = $time1 = 0;
    if ($npcc == 1) {
        $sl = 1;
        $time1 = 60;
    } else if ($npcc == 2) {
        $sl = 6;
        $time1 = 360;
    } else if ($npcc == 3) {
        $sl = 12;
        $time1 = 720;
    } else if ($npcc == 4) {
        $sl = 24;
        $time1 = 1440;
    }

    if ($sl && $time1) {
        $npcc11 = $npcc;//存值
        $pd = 0;//初始
        $wpts = "";//初始
        $wpdz1 = [];//初始
        $wpdz2 = [];//初始
        $wpdz3 = [];//初始
        $wpdz4 = [];//初始
        $wpdz5 = [];//初始

        $wpdz1[] = "〖小公主の激素〗";//名字
        $wpdz2[] = 4;//物品分类
        $wpdz3[] = 945;//物品id
        $wpdz4[] = $sl;//	需要扣除的量
        $wpdz5[] = 1;//	重量
        include("./pz/ini_pzz026.php");
        $npcc = $npcc11;//返还存值
        if ($pd == 2) {
            $q2 = "zz";
            $tiemxx = date("Y-m-d H:i:s", strtotime("$shtime   -$time1   minute"));   //日期天数相加函数
            $strsql = "update $q2 set shtime='$tiemxx' where id=$zzid";
            $result = mysql_query($strsql);
            echo "<font color=black>恭喜您！！使用了〖小公主の激素〗！伤不起~~~伤不起!!（收获时间提升" . $time1 . "分钟）</font>" . "<br>";
        } else {
            echo "<font color=black>对不起！！需要〖小公主の激素〗x$sl</font>" . "<br>";
        }
    } else {
        echo "<font color=black>无效操作</font>"."<br>";
    }

    $cmid=$cmid+1;
    $cdid[]=$cmid;
    $clj[]=658;
    $npc[]=0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";

    $cmid=$cmid+1;
    $cdid[]=$cmid;
    $clj[]=658;
    $npc[]=0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回农场</font></a>"."<br>";
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
