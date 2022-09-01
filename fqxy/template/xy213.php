<?php

//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
    if($npcc==1){
        echo "<font color=red>你确定要花费10金豆用于兑换〖玄铁令〗吗</font>"."<br>";

        $cmid=$cmid+1;
        $cdid[]=$cmid;
        $clj[]=213;
        $npc[]=2;
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>确认</font></a>";
        echo "<font color=black>|</font>";

        $cmid=$cmid+1;
        $cdid[]=$cmid;
        $clj[]=2;
        $npc[]=0;
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>取消</font></a>"."<br/>";
    } elseif ($npcc==2) {
        include("./ini/sc_ini.php");
        $wpsl=($iniFile->getItem('商城数量','127'));
        if($wpsl>=10){
            $xtl=($iniFile->getItem('商城数量','266'));
            if($xtl>=1){
                $xtl=$xtl+1;
                include("./sql/mysql.php");//调用数据库连接
                $q2="wp";
                $strsql = "update $q2 set wpsl=$xtl where wjid=$wjid and wpid=266";//物品id号必改值
                $result = mysql_query($strsql);
            } else{
                include("./sql/mysql.php");//调用数据库连接
                //新增数据
                //获取最大值
                $q2="wp";
                $sql = "insert into $q2 (wjid,wpid,wpsl,wpfl)  values('$wjid','266','1','4')";
                if (!mysql_query($sql,$conn)) {
                    die('Error: ' . mysql_error());
                }
            }

            $wpsl=$wpsl-10;
            $q2="wp";
            $strsql = "update $q2 set wpsl=$wpsl where wjid=$wjid and wpid=127";//物品id号必改值
            $result = mysql_query($strsql);

            $inina="sc.ini";
            $path='ache/'.$wjid;
            $ininame = $path."/".$inina;
           _unlink($ininame); //删除文件

            $kcrl=9;
            //背包容量变更
            include("./pz/ini_pzz05.php");
            echo "<font color=red>恭喜你！！获得〖玄铁令〗x1</font>"."<br>";
            echo "<font color=red>失去〖金豆〗x10</font>"."<br>";
        } else{
            echo "<font color=red>对不起！！兑换〖玄铁令〗金豆不足</font>"."<br>";
        }
    } elseif($npcc == 3) {
        echo "<font color=red>你确定要花费10金豆用于兑换〖求婚玫瑰〗吗</font>"."<br>";
        $cmid=$cmid+1;
        $cdid[]=$cmid;
        $clj[]=213;
        $npc[]=4;
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>确认</font></a>";
        echo "<font color=black>|</font>";

        $cmid=$cmid+1;
        $cdid[]=$cmid;
        $clj[]=2;
        $npc[]=0;
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>取消</font></a>"."<br/>";
    }elseif($npcc==4){
        include("./ini/sc_ini.php");
        $wpsl=($iniFile->getItem('商城数量','127'));
        if($wpsl>=10){
            $xtl=($iniFile->getItem('商城数量','397'));
            if($xtl>=1){
                $xtl=$xtl+1;
                include("./sql/mysql.php");//调用数据库连接
                $q2="wp";
                $strsql = "update $q2 set wpsl=$xtl where wjid=$wjid and wpid=397";//物品id号必改值
                $result = mysql_query($strsql);
            } else{
                include("./sql/mysql.php");//调用数据库连接
                //新增数据
                $q2="wp";
                $sql = "insert into $q2 (wjid,wpid,wpsl,wpfl)  values('$wjid','397','1','4')";
                if (!mysql_query($sql,$conn)) {
                    die('Error: ' . mysql_error());
                }
            }

            $wpsl=$wpsl-10;
            $q2="wp";
            $strsql = "update $q2 set wpsl=$wpsl where wjid=$wjid and wpid=127";//物品id号必改值
            $result = mysql_query($strsql);

            $inina="sc.ini";
            $path='ache/'.$wjid;
            $ininame = $path."/".$inina;
           _unlink($ininame); //删除文件

            echo "<font color=red>恭喜你！！获得〖求婚玫瑰〗x1</font>"."<br>";
            echo "<font color=red>失去〖金豆〗x10</font>"."<br>";
        } else{
            echo "<font color=red>对不起！！兑换〖求婚玫瑰〗金豆不足</font>"."<br>";
        }
    }
    echo "<br/>";
    $cmid=$cmid+1;
    $cdid[]=$cmid;
    $clj[]=2;
    $npc[]=0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br/>";
}

//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini
