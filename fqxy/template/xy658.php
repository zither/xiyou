<?php
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
    include(XY_DIR . "/ini/zz_ini.php");

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

    $nowtime=date('Y-m-d H:i:s');

    if($sftime>$nowtime){
        if($zzwpid>=1){
            echo "<font color=blue>种植时间：".$zztime."</font></a>"."<br>";
            echo "<font color=blue>收获时间：".$shtime."</font></a>"."<br>";
            echo "<font color=blue>最晚施肥时间：".$sftime."</font></a>"."<br>";
        } else{
            echo "<font color=blue>种植时间：未种植</font></a>"."<br>";
            echo "<font color=blue>收获时间：未种植</font></a>"."<br>";
            echo "<font color=blue>最晚施肥时间：未种植</font></a>"."<br>";
        }
        echo "<font color=black>请选择您要种植的物品</font>"."<br>";
        if($zzwpid>=1){
            echo "<font color=red>种植物：".$zzwpmz."x".$zzwpsl."</font>";
            $cmid=$cmid+1;
            $cdid[]=$cmid;
            $clj[]=660;
            $npc[]=0;
            echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【给它施肥】</font></a>";
            echo "<font color=black>◎</font>";
            $cmid=$cmid+1;
            $cdid[]=$cmid;
            $clj[]=662;
            $npc[]=0;
            echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【收获】</font></a>"."<br>";
            echo "<font color=red>种植等级：".$zzdj."级</font>";
            $cmid=$cmid+1;
            $cdid[]=$cmid;
            $clj[]=661;
            $npc[]=0;
            echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【升级】</font></a>"."<br>";
            echo "<font color=red>〖小公主の激素〗x1（提升1小时）：</font>";
            $cmid=$cmid+1;
            $cdid[]=$cmid;
            $clj[]=665;
            $npc[]=1;
            echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【使用】</font></a>"."<br>";
            echo "<font color=red>〖小公主の激素〗x6（提升6小时）：</font>";
            $cmid=$cmid+1;
            $cdid[]=$cmid;
            $clj[]=665;
            $npc[]=2;
            echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【使用】</font></a>"."<br>";
            echo "<font color=red>〖小公主の激素〗x12（提升12小时）：</font>";
            $cmid=$cmid+1;
            $cdid[]=$cmid;
            $clj[]=665;
            $npc[]=3;
            echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【使用】</font></a>"."<br>";

            echo "<font color=red>〖小公主の激素〗x24（提升24小时）：</font>";
            $cmid=$cmid+1;
            $cdid[]=$cmid;
            $clj[]=665;
            $npc[]=4;
            echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【使用】</font></a>"."<br>";

        } else{
            echo "<font color=black>【未种植】</font>"."<br>";
        }
        echo "<br>";
        $cmid=$cmid+1;
        $cdid[]=$cmid;
        $clj[]=659;
        $npc[]=1;
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【种植】〖金豆〗x100</font></a>"."<br>";
        /*
        //cmd及超链接值
        $cmid=$cmid+1;
        $cdid[]=$cmid;
        $clj[]=659;
        $npc[]=2;
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【种植】〖云梯石〗x10</font></a>"."<br>";
        */

        $cmid=$cmid+1;
        $cdid[]=$cmid;
        $clj[]=659;
        $npc[]=3;
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【种植】〖八倍掉宝符〗x1</font></a>"."<br>";

        $cmid=$cmid+1;
        $cdid[]=$cmid;
        $clj[]=659;
        $npc[]=4;
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【种植】〖护身符〗x1</font></a>"."<br>";

        $cmid=$cmid+1;
        $cdid[]=$cmid;
        $clj[]=659;
        $npc[]=5;
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【种植】〖尊享VIP〗（月卡）x1</font></a>"."<br>";

        $cmid=$cmid+1;
        $cdid[]=$cmid;
        $clj[]=659;
        $npc[]=6;
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【种植】〖至尊宝石包〗（1个）x1</font></a>"."<br>";

        $cmid=$cmid+1;
        $cdid[]=$cmid;
        $clj[]=659;
        $npc[]=7;
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【种植】〖帝王石〗x5</font></a>"."<br>";
    } else{
        echo "<font color=red>对不起！！由于您未在施肥时间前来施肥作物已死亡（下次记得按时前来哦）</font>"."<br>";
        $q2="zz";
        $strsql = "delete from $q2 where wjid=$wjid";//物品id号必改值
        $result = mysql_query($strsql);
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
