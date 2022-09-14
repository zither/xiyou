<?php

//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
    $xpid=$npcc;
    echo"<font color=black>请放入你需要进星盘的物品</font></a>"."<br>";
    include("./ini/sc_ini.php");
    $wpid=($iniFile->getCategory('商城id'));
    $wpmz=($iniFile->getCategory('商城名字'));
    $wpsl=($iniFile->getCategory('商城数量'));
    $wpxl=($iniFile->getCategory('序列'));
    $cb01=count($wpxl,0);
    $cb02=count($wpid,0);
    $cb03=count($wpmz,0);
    $cb04=count($wpsl,0);
    if($cb01==$cb02&&$cb01==$cb03&&$cb01==$cb04&&$cb02==$cb03&&$cb02==$cb04&&$cb03==$cb04){
        $m=count($wpid,0)-1;
        $i=0;
        $km=0;
        foreach(array_keys($wpmz) as $key){
            $keywpmz[]=$wpmz[$key];
        }
        foreach(array_keys($wpsl) as $key){
            $keywpsl[]=$wpsl[$key];
        }
        foreach(array_keys($wpid) as $key){
            $keywpid[]=$wpid[$key];
        }
        for($d=0;$d<$m;$d++){
            $i=$i+1;
            $ivd=$keywpid[$i];
            $mvz=$keywpmz[$i];
            $svl=$keywpsl[$i];
            if($ivd>=717&&$ivd<=728||$ivd>=731&&$ivd<=736||$ivd>=825&&$ivd<=830){
                $mmz[]=$mvz;
                $ssl[]=$svl;
                $iid[]=$ivd;
                $km=$km+1;
                $mz[]=$mvz;
            }
        }

        $i=-1;
        if($km>=1){
            for($x=0;$x<$km;$x++){
                $i=$i+1;
                $clname= $mz[$i];
                $cl=$ssl[$i];
                $xxid=$iid[$i];
                if($cl>=1){
                    $str=$xxid."_".$xpid;
                    $cmid=$cmid+1;
                    $cdid[]=$cmid;
                    $clj[]=592;
                    $npc[]=$str;
                    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>$clname</font></a>"."<font color=blue>x$cl</font>"."<br>";
                }
            }
        } else{
            echo "<font color=red>你没有可放入星盘的物品</font>"."<br>";
        }
    } else{
        echo "<font color=black>物品错位（联系GM修复）</font>"."<br>";
    }

    echo "<br>";

    $cmid=$cmid+1;
    $cdid[]=$cmid;
    $clj[]=589;
    $npc[]=0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";

    $cmid=$cmid+1;
    $cdid[]=$cmid;
    $clj[]=2;
    $npc[]=0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
    echo "----------------------"."<br>";
    include("fhgame.php");
}

//解锁当前使用的ini
include("./ini/jsini.php");
