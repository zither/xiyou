<?php

//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");

if($zsspd==1) {
    $dh = $npcc;
    if ($dh) {
        $db = DB::instance();
        $cl = $db->select('wp', '*', ['wjid' => $wjid, 'wpfl' => 6, 'wpsl[>]' => 0]);
        if (!empty($cl)) {
            foreach ($cl as $v) {
                $npcc = $v['wpid'];
                include XY_DIR . '/wp/wpxx.php';
                $pd = 0;//初始
                $wpts = "";//初始
                $wpdz1 = [];//初始
                $wpdz2 = [];//初始
                $wpdz3 = [];//初始
                $wpdz4 = [];//初始
                $wpdz5 = [];//初始
                //提供需要扣除的物品作为判读依据
                $wpdz1[] = $wpmz;//名字
                $wpdz2[] = $wpfl;//物品分类
                $wpdz3[] = $v['wpid'];//物品id
                $wpdz4[] = $v['wpsl'];//	需要扣除的量
                $wpdz5[] = $wpzl;//	重量
                include XY_DIR . "/pz/ini_pzz026.php";
                if ($pd == 2) {
                    $swidx = 8;//要获得声望id
                    $swmzx = "西游声望";//名字
                    $syz = $v['wpsl'] * 100;//值
                    include XY_DIR . "/pz/ini_pzz035.php";
                }
            }
        } else {
            echo "<font color=red>没有找到任务材料，兑换失败</font>"."<br>";
        }
    } else {
        echo "<font color=red>温馨提示:所有任务材料一件兑换西游声望请把要保留的材料存在仓库</font>"."<br>";
        echo "<font color=black>==================</font>"."<br>";
        $cmid=$cmid+1;
        $cdid[]=$cmid;
        $clj[]=689;
        $npc[]=1;
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>一键【任意一个任务材料兑换西游声望100】</font></a>"."<br>";
        echo "<font color=black>==================</font>"."<br>";
    }

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
//解锁当前使用的ini
