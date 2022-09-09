<?php
echo "<font color=black>你被".$nname."打得遍体鳞伤，奄奄一息的死掉了！！！</font>"."<br>";

//被干死恢复满血满蓝
include("./ini/zt_ini.php");
$iniFile->updItem('玩家信息', ['红' => $wjxx1['血'],'蓝' => $wjxx1['蓝']]);
$wjmz = $iniFile->getItem('玩家信息', '玩家名字');

include XY_DIR . '/ini/user_ini.php';
$ydtx = $iniFile->getItem('地图坐标', 'x');
$ydty = $iniFile->getItem('地图坐标', 'y');
//在国战中死亡
if ($ydtx == 74) {
    include XY_DIR . '/ini/zt_ini.php';
    $bpid = $iniFile->getItem('玩家信息', '帮派id');
    $wjswcs = gz04_sw($wjid);
    if (!$wjswcs) {
        $xdtx = 1;
        $xdty = 25;
    } else {
        if ($bpid == zlbp(zcid())) {
            $xdtx = 74;
            $xdty = 22;
        } else {
            $xdtx = 74;
            $xdty = 16;
        }
    }
    wjyd($wjid, $xdtx, $xdty);
    $xtxx = "<span style=\"color: red\">{$wjmz}被{$nname}打得遍体鳞伤，奄奄一息的死掉了！！！</span><br>";
    include("./msg/msgg02.php");
}

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
echo "<br>";
echo "<font color=black>----------------------</font>"."<br>";
//cmd及超链接值
include("fhgame.php");
?>