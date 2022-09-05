<?php

include(XY_DIR . "/ini/zxrw_ini.php");

//是否接受任务
$jsrw = $jsrw ?? 0;

$rwidd= $rwid ?? 0;//任务的id
$rwfl = $rwfl ?? 0;//任务的分类1主线2支线5日常4活动
$rwxx = [];
$rwbl = rwbl($wjid, $rwidd, $rwfl, $rwxx);
$rwmz = $rwxx['mz'];

// 任务可以接受
if ($rwbl == RWBL_1) {
    //直接创建任务
    include(XY_DIR . "/rwmap/rwpd.php");
}

$rwstr = $rwstr ?? $rwidd."_".$rwfl;

////////////////////任务属性//////////////
$rcrwbl=($iniFile->getItem('任务变量',$rwstr));
$rw5=$rwfl;
$rw1=$rwidd;

if ($rcrwbl==1) {
    //任务描述
    echo "<font color=black>{$rwxx['ms1']}</font>"."<br>";
    //手动接受的任务
    if (!$rwxx['zdjs'] && !$jsrw) {
        $cmid = $cmid + 1;
        $cdid[] = $cmid;
        $clj[] = 686;
        $npc[] = $rwxx['id'] . '_1';
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><span style='color: blue'>接受</span></a><br>";

        //返回上一页
        include XY_DIR . '/ini/user_ini.php';
        $ycmid = $iniFile->getItem('最后页面id', '页面id');
        $ynpc = $iniFile->getItem('最后页面id', 'npcid');
        $cmid = $cmid + 1;
        $cdid[] = $cmid;
        $clj[] = $ycmid ?? 2;
        $npc[] = $ynpc ?? 0;
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><span style='color: blue'>取消</span></a> <br>";
    } else {
        //任务进程改变
        //任务bl
        $rwjc1 = $rwxx['jsbl'] ?? RWBL_2;
        //任务已杀怪
        $rwjc2 = 0;
        //任务要杀怪
        $rwjc3 = 0;
        //任务名字
        $rwjc4 = $rwxx['mz'];
        include(XY_DIR . "/pz/ini_pzz025.php");

        if ($rwxx['ksrw']) {
            //快速任务
            $ydx = $rwxx['ksrw_x'];
            $ydy = $rwxx['ksrw_y'];
            $ydfy = $rwxx['ksrw_fy'];
            include(XY_DIR . "/rw/ksrw.php");
        }
        // 继续聊
        if ($rwxx['jxl_1']) {
            $cmid = $cmid + 1;
            $cdid[] = $cmid;
            $clj[] = 686;
            $npc[] = $rwxx['id'];
            echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><span style='color: blue'>继续</span></a><br>";
        }
    }
} elseif ($rcrwbl==2) {
    if ($rwxx['zdwc']) {
        echo "<font color=black>{$rwxx['ms2']}</font>" . "<br>";
        //任务进程改变
        //任务bl
        $rwjc1 = RWBL_3;
        //任务已杀怪
        $rwjc2 = 0;
        //任务要杀怪
        $rwjc3 = 0;
        //任务名字
        $rwjc4 = $rwxx['mz'];
        include(XY_DIR . "/pz/ini_pzz025.php");

        if ($rwxx['fhrw']) {
            //快速任务
            $ydx = $rwxx['fhrw_x'];
            $ydy = $rwxx['fhrw_y'];
            $ydfy = $rwxx['fhrw_fy'];
            include(XY_DIR . "/rw/ksrw.php");
        }
        // 继续聊
        if ($rwxx['jxl_2']) {
            $cmid = $cmid + 1;
            $cdid[] = $cmid;
            $clj[] = 686;
            $npc[] = $rwxx['id'];
            echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><span style='color: blue'>继续</span></a><br>";
        }
    } else {
        echo "<font color=black>{$rwxx['ms1']}</font>" . "<br>";
        //TODO 显示任务要求
        if ($rwxx['ksrw']) {
            //快速任务
            $ydx = $rwxx['ksrw_x'];
            $ydy = $rwxx['ksrw_y'];
            $ydfy = $rwxx['ksrw_fy'];
            include(XY_DIR . "/rw/ksrw.php");
        }
    }
} elseif ($rcrwbl==3) {
    if (!$rwxx['zdtj'] && !$jsrw) {
        echo "<font color=black>{$rwxx['ms2']}</font>"."<br>";
        //TODO 显示任务要求
        $cmid = $cmid + 1;
        $cdid[] = $cmid;
        $clj[] = 686;
        $npc[] = $rwxx['id'] . '_1';
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><span style='color: blue'>完成任务</span></a><br>";

        //返回上一页
        include XY_DIR . '/ini/user_ini.php';
        $ycmid = $iniFile->getItem('最后页面id', '页面id');
        $ynpc = $iniFile->getItem('最后页面id', 'npcid');
        $cmid = $cmid + 1;
        $cdid[] = $cmid;
        $clj[] = $ycmid ?? 2;
        $npc[] = $ynpc ?? 0;
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><span style='color: blue'>取消</span></a> <br>";
    } else {
        //检查任务完成要求
        if ($rwxx['kcwp']) {
            $npcc11 = $npcc;//存值
            $pd = 0;
            $wpts = "";
            $wpdz1 = [];
            $wpdz2 = [];
            $wpdz3 = [];
            $wpdz4 = [];
            //提供需要扣除的物品作为判读依据
            foreach ($rwxx['kcwp'] as $v) {
                $wpdz1[] = $v['mz'];
                $wpdz2[] = $v['fl'];//物品分类
                $wpdz3[] = $v['id'];//物品id
                $wpdz4[] = $v['sl'];//	需要扣除的量
                $wpdz5[] = 1;//	重量
            }
            include(XY_DIR . "/pz/ini_pzz026.php");
            $npcc = $npcc11;//返还存值
        }

        $pd = isset($pd) ? $pd : 0;
        //达到任务要求
        if (empty($rwxx['kcwp']) || $pd == 2) {
            //完成任务
            echo "<font color=black>{$rwxx['ms3']}</font>"."<br>";
            $rwjc1=4;
            $rwjc2=0;
            $rwjc3=0;
            $rwjc4=$rwxx['mz'];//任务名字
            include(XY_DIR . "/pz/ini_pzz025.php");

            //触发操作
            cz($wjid, [
                'jy' => $rwxx['jy'],
                'yl' => $rwxx['yl'],
                'wp' => $rwxx['wp'],
            ]);

            //支线任务完成后从缓存中删除，但是数据库中保留
            $rwstr = $rwidd . "_" . $rwfl;
            $iniFile->delItem('任务id', $rwstr);
            $iniFile->delItem('任务变量', $rwstr);
            $iniFile->delItem('已杀怪', $rwstr);
            $iniFile->delItem('要杀怪', $rwstr);
            $iniFile->delItem('任务分类', $rwstr);
            $iniFile->delItem('任务名字', $rwstr);
        }
    }
} else{
    echo "<font color=red>对不起！请联系GM处理</font></br>";
}
