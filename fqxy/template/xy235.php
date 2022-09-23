<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include(XY_DIR . "/ini/zsini.php");
if($zsspd==1){
    $inina="yl.ini";
    $path='ache/'.$wjid;
    $file = $path."/".$inina;
    $iniFile = new iniFile($file);
    $ymid=($iniFile->getItem('背包页面','页面id'));

    $inina="qt.ini";
    $path='ache/'.$wjid;
    $ininame = $path."/".$inina;
    $iniFile = new iniFile($ininame);
    $wpsl=($iniFile->getItem('其他数量',$npcc));

    if($wpsl>1){
        $bsid=$npcc;
        include("./wp/zbbs.php");
        $wpmz=$bsmz;
        include("npcc/gsqt01.php");
        if($ymid==35){ //背包其他
            $cmid=$cmid+1;
            $cdid[]=$cmid;
            $clj[]=35;
            $npc[]=0;
            echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回其他</font></a>"."<br>";
        }

        $cmid=$cmid+1;
        $cdid[]=$cmid;
        $clj[]=2;
        $npc[]=0;
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
        echo "----------------------"."<br>";
        include("fhgame.php");
    } elseif($wpsl==1){
        $sl=1;
        $wpsl=1;
        $sll=1;
        $bsid=$npcc;
        include("./wp/zbbs.php");
        $wpmz=$bsmz;
        include("npcc/gsqt01.php");

        $cmid=$cmid+1;
        $cdid[]=$cmid;
        $clj[]=35;
        $npc[]=0;
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回其他</font></a>"."<br>";
    }
}

//解锁当前使用的ini
include("./ini/jsini.php");
