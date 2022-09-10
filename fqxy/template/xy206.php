<?php

//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");

if($zsspd==1) {

    $wjid = wjid();
    $kknpcc = $npcc;
    $arr = explode('_', $npcc);
    //排行榜类型，1国家周积分榜，2国家日积分榜，3个人周积分榜，4个人日积分榜
    $fl = empty($arr[0]) ? 1 : $arr[0];
    //是否为领取操作
    $lq = empty($arr[1]) ? 0 : $arr[1];

    $mz = $fl == 1 || $fl == 3 ? '周' : '日';
    $key = $fl == 1 || $fl == 3 ? 'zjf' : 'rjf';

    $db = DB::instance();
    if ($lq) {
        //领取奖励
        //领取字段
        $lqzd = $fl == 1 || $fl == 3 ? 'zlq' : 'rlq';
        if ($fl == 1 || $fl == 2) {
            include XY_DIR . '/ini/zt_ini.php';
            $bpid = $iniFile->getItem('玩家信息', '帮派id');
            $bpzw = $iniFile->getItem('玩家信息', '帮派职务');
            if (empty($bpzw)) {
                echo "<span style='color: red'>国家职位不足，领取国家奖励需要君主和官员。</span><br>";
            } else {
                $gz03 = $db->get('gz03', '*', ['gjid' => $bpid]);
                $jf = $gz03[$key] ?? 0;
                if (empty($jf)) {
                    echo "<span style='color: red'>国家积分为0，领取失败</span><br>";
                } elseif ($gz03[$lqzd]) {
                    echo "<span style='color: red'>奖励已领取！</span><br>";
                } else {
                    //奖励占位，目前只增加国家经验和声望
                    $gxx = 0;//个人贡献
                    $gxx02 = $gz03[$key] * 10;//国家经验
                    $gxx03 = $gz03[$key] * 10;//国家声望
                    include(XY_DIR . "/yxpz/gjgx_pz.php");
                    $db->update('gz03', [$lqzd => 1], ['gjid' => $bpid]);
                }
            }
        } else {
            $gz04 = $db->get('gz04', '*', ['wjid' => $wjid]);
            $jf = $gz04[$key] ?? 0;
            if (empty($jf)) {
                echo "<span style='color: red'>玩家积分为0，领取失败</span><br>";
            } elseif ($gz04[$lqzd]) {
                echo "<span style='color: red'>奖励已领取！</span><br>";
            } else {
                //奖励占位
                $gxx = $gz04[$key] * 10;//个人贡献
                $gxx02 = 0;//国家经验
                $gxx03 = 0;//国家声望
                include(XY_DIR . "/yxpz/gjgx_pz.php");
                $db->update('gz04', [$lqzd => 1], ['wjid' => $wjid]);
            }
        }

    } else {
        //显示排行榜
        $top = [];
        $limit = 10;

        $tj = [
            "{$key}[>]" => 0,
            'ORDER' => [$key => 'DESC'],
            'LIMIT' => $limit,
        ];

        if ($fl == 1) {
            echo "国家周榜 | ";
            $cmid = $cmid + 1;
            $cdid[] = $cmid;
            $clj[] = 206;
            $npc[] = '2';
            echo "<a href='xy.php?uid={$wjid}&cmd={$cmid}&sid={$a1}'>国家日榜</a> |";
            $cmid = $cmid + 1;
            $cdid[] = $cmid;
            $clj[] = 206;
            $npc[] = '3';
            echo "<a href='xy.php?uid={$wjid}&cmd={$cmid}&sid={$a1}'>玩家周榜</a> |";
            $cmid = $cmid + 1;
            $cdid[] = $cmid;
            $clj[] = 206;
            $npc[] = '4';
            echo "<a href='xy.php?uid={$wjid}&cmd={$cmid}&sid={$a1}'>玩家日榜</a><br>";
        } elseif ($fl == 2) {
            $cmid = $cmid + 1;
            $cdid[] = $cmid;
            $clj[] = 206;
            $npc[] = '1';
            echo "<a href='xy.php?uid={$wjid}&cmd={$cmid}&sid={$a1}'>国家周榜</a> |";
            echo "国家日榜 | ";
            $cmid = $cmid + 1;
            $cdid[] = $cmid;
            $clj[] = 206;
            $npc[] = '3';
            echo "<a href='xy.php?uid={$wjid}&cmd={$cmid}&sid={$a1}'>玩家周榜</a> |";
            $cmid = $cmid + 1;
            $cdid[] = $cmid;
            $clj[] = 206;
            $npc[] = '4';
            echo "<a href='xy.php?uid={$wjid}&cmd={$cmid}&sid={$a1}'>玩家日榜</a><br>";
        } elseif ($fl == 3) {
            $cmid = $cmid + 1;
            $cdid[] = $cmid;
            $clj[] = 206;
            $npc[] = '1';
            echo "<a href='xy.php?uid={$wjid}&cmd={$cmid}&sid={$a1}'>国家周榜</a> |";
            $cmid = $cmid + 1;
            $cdid[] = $cmid;
            $clj[] = 206;
            $npc[] = '2';
            echo "<a href='xy.php?uid={$wjid}&cmd={$cmid}&sid={$a1}'>国家日榜</a> |";
            echo "玩家周榜 | ";
            $cmid = $cmid + 1;
            $cdid[] = $cmid;
            $clj[] = 206;
            $npc[] = '4';
            echo "<a href='xy.php?uid={$wjid}&cmd={$cmid}&sid={$a1}'>玩家日榜</a><br>";
        } else {
            $cmid = $cmid + 1;
            $cdid[] = $cmid;
            $clj[] = 206;
            $npc[] = '1';
            echo "<a href='xy.php?uid={$wjid}&cmd={$cmid}&sid={$a1}'>国家周榜</a> |";
            $cmid = $cmid + 1;
            $cdid[] = $cmid;
            $clj[] = 206;
            $npc[] = '2';
            echo "<a href='xy.php?uid={$wjid}&cmd={$cmid}&sid={$a1}'>国家日榜</a> |";
            $cmid = $cmid + 1;
            $cdid[] = $cmid;
            $clj[] = 206;
            $npc[] = '3';
            echo "<a href='xy.php?uid={$wjid}&cmd={$cmid}&sid={$a1}'>玩家周榜</a> |";
            echo "玩家日榜<br>";
        }
        //国家积分榜单
        if ($fl == 1 || $fl == 2) {
            $gj_arr = $db->select('gz03', '*', $tj);
            foreach ($gj_arr as $k =>  $v) {
                $i = $k + 1;
                echo "<span style='color: black'>{$i}.{$v['gjmz']}（{$v[$key]}）</span><br>";
            }
        } else {
            $wj_arr = $db->select('gz04', '*', $tj);
            foreach ($wj_arr as $k =>  $v) {
                $i = $k + 1;
                echo "<span style='color: black'>{$i}.{$v['wjmz']}（{$v[$key]}）</span><br>";
            }
        }
        $cmid = $cmid + 1;
        $cdid[] = $cmid;
        $clj[] = 206;
        $npc[] = "{$fl}_1";
        echo "<a href='xy.php?uid={$wjid}&cmd={$cmid}&sid={$a1}'>领取奖励</a><br>";
    }

    $cmid=$cmid+1;
    $cdid[]=$cmid;
    $clj[] = 206;
    $npc[] = $fl;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回排行榜</font></a>"."<br>";

    $cmid=$cmid+1;
    $cdid[]=$cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
    echo "<font color=black>----------------------</font>"."<br>";
    include("fhgame.php");
}

//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini
