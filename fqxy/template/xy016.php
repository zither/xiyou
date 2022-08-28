<?php

//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){

    //获取返回战斗页面
    include("./ini/npc_ini.php");
    $yymid=($iniFile->getItem('怪物2号属性','初始'));
    $cljpost=$yymid;
    if($cljpost==389 || $cljpost == 522){
        include("./ini/pksw_ini.php");
        $pkwjid=($iniFile->getItem('玩家id','初始'));
    }
    //获取返回战斗页面

    $cmid=$cmid+1;
    $cdid[]=$cmid;
    $clj[]=15;
    $npc[]=0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>技能</font></a>"."<font color=black>|药品</font>"."<br>";
    echo "<font color=black>请选择指定的物品作为快捷键以便在战斗中直接使用</font>"."<br>";

    include("./ini/dy_ini.php");
    $wpidd=($iniFile->getCategory('丹药id'));
    foreach(array_keys($wpidd) as $key){
        $wpid[]=$wpidd[$key];
    }
    //include("./wj/dy.php");//调用可以设置为快捷键的丹药

    //$c=(array_intersect($wpid,$wpidx));
    $m=count($wpid,0)-1;
    if($m>0){
        $i=0;
        for($d=0;$d<$m;$d++){
            $i=$i+1;
            $cc=$wpid[$i];
            $dymz=($iniFile->getItem('丹药名字',$cc));
            echo "<font color=black>".$i.".</font>";
            $cmid=$cmid+1;
            $cdid[]=$cmid;
            $clj[]=247;
            $npc[]=$cc;
            echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$dymz."</font></a>"."</br>";
        }
    } else{
        echo "<font color=black>你还没有任何可用的丹药</font>"."<br>";
    }

    if($cljpost==389 || $cljpost == 522){
        echo "<br>";
        $cmid=$cmid+1;
        $cdid[]=$cmid;
        $clj[]=$cljpost;
        $npc[]=$pkwjid;
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
    } else{
        echo "<br>";
        $cmid=$cmid+1;
        $cdid[]=$cmid;
        $clj[]=$cljpost;
        $npc[]=0;
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
    }
    echo "<font color=black>----------------------</font>"."<br>";

    include("fhgame.php");
}

//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini
