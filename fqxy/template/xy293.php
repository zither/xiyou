<?php
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
    $kknpcc = $npcc;
    $arr = explode('_', $npcc);
    $npcc = $arr[0];
    $gswpid = $arr[1];

    //include(XY_DIR . "/wp/wpxx.php");
    //if (empty($wpmz) && empty($wpfl)) {
    //    $bsid=$npcc;
    //    include(XY_DIR . "/wp/zbbs.php");
    //    if (empty($bsmz)) {
    //        throw new RuntimeException('无效下架参数');
    //    }
    //    $wpmz=$bsmz;
    //}

    $db = DB::instance();
    $wpsl = $db->get('gswp', 'wpsl', ['id' => $gswpid, 'wjid' => $wjid]);
    if ($wpsl) {
        $qbwp = 1;
        $sl = $wpsl;
        if ($wpsl == 1) {
            $sll=1;
        } else {
            $sll=preg_match('/^\d+$/i', $sl);
        }
        //还原参数
        $npcc = $kknpcc;
        include XY_DIR . "/npcc/gsxjwp02.php";
    } else {
        echo "错误的物品数量，下架失败<br>";
    }

    $cmid=$cmid+1;
    $cdid[]=$cmid;
    $clj[]=2;
    $npc[]=0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
    echo "<font color=black>----------------------</font></a>"."<br>";
    include("fhgame.php");
}

//解锁当前使用的ini
include("./ini/jsini.php");

