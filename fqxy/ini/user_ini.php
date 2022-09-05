<?php

$inina = "user.ini";
$path = 'ache/' . $wjid;
$file = $path . "/" . $inina;

if (!file_exists($file)) {
    //ini文件名字
    $inina = "user.ini";
    //判断文件夹是否存在
    //路径
    $path = '../ache/' . $wjid;
    $dir = $path;
    if (!file_exists($dir)) {
        mkdir($dir, 0777, true);
    }
    //随机产生一个玩家的特征码写入数据库验证网址信息
    function randomkeys($length) {
        $returnStr = '';
        $pattern = '1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLOMNOPQRSTUVWXYZ';
        for ($i = 0; $i < $length; $i++) {
            $index = mt_rand(0, 61);
            $returnStr .= substr($pattern, $index, 1); //生成php随机数
        }
        return $returnStr;
    }

    $ka1 = randomkeys(30);
    $kcmid = 1;
    $knpc = 0;
    $ka4 = 1;
    $ka5 = 1;
    $ky = date('Y');
    $km = date('m');
    $kd = date('d');
    $kh = date('H');
    $ki = date('i');
    $ks = date('s');
    file_put_contents($file, "[" . $wjid . "]");
    $iniFile = new iniFile($file);
    $iniFile->addItem('验证信息', [
        '玩家id' => $wjid,
        '玩家验证' => $wjid,
        '玩家游戏码' => $ka1,
        'cmid值' => $kcmid,
        'npc值' => $knpc,
        'xcmid值' => $ka4,
        'dcmid值' => $ka5,
        '年' => $ky,
        '月' => $km,
        '日' => $kd,
        '时' => $kh,
        '分' => $ki,
        '秒' => $ks
    ]);
    $iniFile->addItem('地图坐标', ['x' => '0', 'y' => '0']);
    $iniFile->addItem('最后页面id', ['页面id' => '0', 'npcid' => '0']);
    $iniFile->addItem('超链接值', ['初始' => 123]);
} else {
    $iniFile = new iniFile($file);
}

