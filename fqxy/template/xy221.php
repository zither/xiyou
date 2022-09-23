<?php

//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
    $inina="gswp.ini";
    $path='ache/'.$wjid;
    $ininame = $path."/".$inina;
    $iniFile = new iniFile($ininame);
    $wpsl=($iniFile->getItem('物品数量',$npcc));
    ///////////////////////////丢弃数量大于1的物品/////////////////////////////
    if($wpsl>1){
        include("./wp/wpxx.php");
        include("npcc/gsxjwp01.php");
    } elseif($wpsl==1){
        $sl=1;
        $wpsl=1;
        $sll=1;
        include("./wp/wpxx.php");
        include("npcc/gsxjwp02.php");
        include("template/xy219.php");
        include("./pz/pz01.php");
    } else{
        echo "<font color=red>该物品已被买走了！！</font>"."<br>";
        echo "<br>";
        $cmid=$cmid+1;
        $cdid[]=$cmid;
        $clj[]=236;
        $npc[]=0;
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";

        $cmid=$cmid+1;
        $cdid[]=$cmid;
        $clj[]=2;
        $npc[]=0;
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
    }
}

//解锁当前使用的ini
include("./ini/jsini.php");
