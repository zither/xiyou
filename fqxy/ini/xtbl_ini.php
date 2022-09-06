<?php

//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="xtbl.ini";
$path='acher/guoz';
$file = $path."/".$inina;
if(file_exists($file)) {

} else {
    $inina="xtbl.ini";
    $path='acher/guoz';
    $file = $path."/".$inina;
    file_put_contents($file,"[国战时间]");
    $iniFile = new iniFile($file);
    $iniFile->addItem('国战判断时间',['初始' => 0]);

    $q2="xtbl";
    $sql1=mysql_query("select * from $q2 where id=1");
    $info1=mysql_fetch_array($sql1);
    $xtbl1=$info1['bl1'];
    $xtbl2=$info1['bl2'];
    $iniFile->addCategory('国战判断时间', ['月'=>$xtbl1,'日'=>$xtbl2 ]);
}

$iniFile = new iniFile($file);
$xtbl1=($iniFile->getItem('国战判断时间','月'));
$xtbl2=($iniFile->getItem('国战判断时间','日'));
