<?php
$inina="wjxtbl.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;
if(file_exists($file)){
} else{
    $inina="wjxtbl.ini";
    $path='ache/'.$wjid;
    $file = $path."/".$inina;
    file_put_contents($file,"[玩家系统变量]");
    $iniFile = new iniFile($file);
    $iniFile->addItem('国战变量',['夺仗' => 123]);
    $iniFile->addCategory('国战变量', ['夺仗'=> '1']);
}
$iniFile = new iniFile($file);
