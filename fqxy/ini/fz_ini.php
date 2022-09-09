<?php

$inina="fz.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;
if(!file_exists($file)){
    $inina="fz.ini";
    $path='ache/'.$wjid;
    $file = $path."/".$inina;
    file_put_contents($file,"[玩家]");
    $iniFile = new iniFile($file);
    $iniFile->addItem('所处房间人id',['初始' => 123]);
}
$iniFile = new iniFile($file);
