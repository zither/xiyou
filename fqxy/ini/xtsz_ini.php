<?php

$inina="xtsz.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;
if(file_exists($file)){

}else{
    $inina="xtsz.ini";
    $path='ache/'.$wjid;
    $file = $path."/".$inina;
    file_put_contents($file,"[玩家]");
    $iniFile = new iniFile($file);
    $iniFile->addItem('显示设置',['图片显示' => 1]);
    $iniFile->addItem('显示设置',['公共信息' => 1]);
    $iniFile->addItem('显示设置',['国家信息' => 1]);
    $iniFile->addItem('显示设置',['私聊信息' => 1]);
    $iniFile->addItem('显示设置',['场景公告' => 1]);
    $iniFile->addItem('显示设置',['地图尺寸' => 11]);
}
return $iniFile = new iniFile($file);
