<?php


//阻塞代码防止出现脏数据
$ininalock = $wjid . "_lock" . ".txt";
include("./ini/zsini.php");
if ($zsspd == 1) {

    $ckmb = 49;

    include("./ini/zt_ini.php");
    $name = ($iniFile->getItem('玩家信息', '玩家名字'));
    include("./ini/zxrw_ini.php");
    $rw1 = ($iniFile->getItem('任务id', $npcc));
    $rw2 = ($iniFile->getItem('任务变量', $npcc));
    $rw3 = ($iniFile->getItem('已杀怪', $npcc));
    $rw4 = ($iniFile->getItem('要杀怪', $npcc));
    $rw5 = ($iniFile->getItem('任务分类', $npcc));
    $rw6 = ($iniFile->getItem('任务名字', $npcc));

    // 老任务系统任务
    if ($rw1 < 1000) {
        if ($rw5 == 1) {
            include XY_DIR . "/rwxx/zxrwxx.php";//主线
        } elseif ($rw5 == 2) {
            include XY_DIR . "/rwxx/zzxrwxx.php";//支线
        } elseif ($rw5 == 5) {
            include XY_DIR . "/rwxx/rcrwxx.php";//日常
        } elseif ($rw5 == 4) {
            include XY_DIR . "/rwxx/hdrwxx.php";//活动
        } else {
            echo "<font color=black>没有这个任务分类编号" . $rw5 . "请尝试联系gm解决此问题！！</font><br>";
        }
    } else {
        //新任务信息
        $xrwxx = rwxx($rw1);
        if (!empty($xrwxx)) {
            if ($rw2 > RWBL_1) {
                echo "<span style='color: black'>{$xrwxx['ms1']}</span><br>";
            }
            if ($rw2 > RWBL_2) {
                echo "<span style='color: black'>{$xrwxx['ms2']}</span><br>";
            }
            if (!empty($xrwxx['sg'])) {
                //TODO 增加杀怪要求显示
            }

        } else {
            echo "<font color=black>没有这个任务分类编号" . $rw5 . "请尝试联系gm解决此问题！！</font><br>";
        }
    }

    //cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 44;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回任务分类</font></a>" . "<br>";
    echo "----------------------" . "<br>";


    echo "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>" . "<br>";

    echo "<font color=black>----------------------</font>" . "<br>";
//cmd及超链接值
    include("fhgame.php");


} else {
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini


?>