<?php

//$d = dirname(dirname(__DIR__));
$inina = "user.ini";
$path = XY_DIR . '/ache/' . $wjid;

if (!file_exists($path)) {
    mkdir($path, 0755, true);
}

$file = $path . "/" . $inina;

if (file_exists($file)) {
    $ka1 = str_rand(30);
    $kcmid = 0;
    $ka4 = 1;
    $ka5 = 1;
    $ky = date('Y');
    $km = date('m');
    $kd = date('d');
    $kh = date('H');
    $ki = date('i');
    $ks = date('s');
    $iniFile = new iniFile($file);
    $iniFile->addItem('验证信息', ['玩家id' => $wjid, '玩家验证' => $wjid, '玩家游戏码' => $ka1, 'cmid值' => $kcmid, 'xcmid值' => $ka4, 'dcmid值' => $ka5, '年' => $ky, '月' => $km, '日' => $kd, '时' => $kh, '分' => $ki, '秒' => $ks]);
} else {
    $ka1 = str_rand(30);
    $kcmid = 0;
    $ka4 = 1;
    $ka5 = 1;
    $ky = date('Y');
    $km = date('m');
    $kd = date('d');
    $kh = date('H');
    $ki = date('i');
    $ks = date('s');

    //创建文件
    file_put_contents($file, "[" . $wjid . "]");
    $iniFile = new iniFile($file);
    $iniFile->addItem('验证信息', ['玩家id' => $wjid, '玩家验证' => $wjid, '玩家游戏码' => $ka1, 'cmid值' => $kcmid, 'xcmid值' => $ka4, 'dcmid值' => $ka5, '年' => $ky, '月' => $km, '日' => $kd, '时' => $kh, '分' => $ki, '秒' => $ks]);
    $iniFile->addItem('地图坐标', ['x' => '0', 'y' => '0']);
    $iniFile->addItem('最后页面id', ['页面id' => '0', 'npcid' => '0']);
    $iniFile->addItem('超链接值', ['初始' => 123]);

}
$iniFile = new iniFile($file);
