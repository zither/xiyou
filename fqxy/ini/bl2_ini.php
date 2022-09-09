<?php

$inina="bl2.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;
if(!file_exists($file)){
    $inina="bl2.ini";
    $path='ache/'.$wjid;
    $file = $path."/".$inina;
    file_put_contents($file,"[玩家]");
    $iniFile = new iniFile($file);
    $iniFile->addItem('玩家排序',['初始' => '排序']);
    $iniFile->addItem('玩家排序1',['初始' => '排序']);
    $iniFile->addItem('玩家id',['初始' => 123]);
    $iniFile->addItem('玩家名字',['初始' => 123]);
    $iniFile->addItem('玩家vip',['初始' => 123]);
    $iniFile->addItem('玩家住宅',['初始' => 123]);
}

$iniFile = new iniFile($file);
