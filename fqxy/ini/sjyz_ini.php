<?php

//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina = "sjyz.ini";
$path = 'ache/' . $wjid;
$file = $path . "/" . $inina;

if (!file_exists($file)) {
    file_put_contents($file, "[刷新时间]");
    $iniFile = new iniFile($file);
    $iniFile->addItem('时间验证', ['初始' => 123]);
    $iniFile->addItem('毫秒时间', ['时间' => 0]);
} else {
    $iniFile = new iniFile($file);
}
