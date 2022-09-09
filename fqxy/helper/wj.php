<?php

function wjyd(int $wjid, int $dtx, int $dty)
{
    include XY_DIR . '/ini/user_ini.php';
    $ydtx = $iniFile->getItem('地图坐标', 'x');
    $ydty = $iniFile->getItem('地图坐标', 'y');
    $iniFile->updItem('地图坐标', ['x' => $dtx, 'y' => $dty]);

    include(XY_DIR . "/wj/mapid.php");
    $path = 'acher/map';
    $ininame = $path . "/" . $inina;

    if (file_exists($ininame)) {
        $iniFile = new iniFile($ininame);
        $iniFile->delItem('玩家时间值' . $ydtx . 'x' . $ydty, $wjid);
        $iniFile->delItem('玩家vip值' . $ydtx . 'x' . $ydty, $wjid);
        $iniFile->delItem('玩家id值' . $ydtx . 'x' . $ydty, $wjid);
        $iniFile->delItem('玩家名字值' . $ydtx . 'x' . $ydty, $wjid);
        $iniFile->delItem('国家名字值' . $ydtx . 'x' . $ydty, $wjid);
        $iniFile->delItem('国家职务名字值' . $ydtx . 'x' . $ydty, $wjid);
    }
}

function hdwp(int $wjid, int $wpid, int $sl)
{
    $wpdz1 = $wpdz2 = $wpdz3 = $wpdz4 = $wpdz5 = [];
    $npcc = $wpid;
    include XY_DIR . '/wp/wpxx.php';
    $wpdz1[] = $wpmz;//名字
    $wpdz2[] = $wpfl;//物品分类
    $wpdz3[] = $wpid;//物品id
    $wpdz4[] = $sl;//	量
    $wpdz5[] = $wpzl;//	重量
    include XY_DIR . "/rwmap/rwget.php";
}
