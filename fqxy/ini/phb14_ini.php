<?php

//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="phb14.ini";
$path='acher/phb';
$file = $path."/".$inina;
if(file_exists($file)) {

} else {

    $inina="phb14.ini";
    $path='acher/phb';
    $file = $path."/".$inina;
    file_put_contents($file,"[排行榜信息]");
    $iniFile = new iniFile($file);
    $iniFile->addItem('排行榜名字',['初始' => 123]);
    $iniFile->addItem('排行榜值1',['初始' => 0]);
    $iniFile->addItem('排行榜值2',['初始' => 0]);
    $iniFile->addItem('排行榜值3',['初始' => 0]);
    $iniFile->addItem('排行榜值4',['初始' => 0]);

    $q2="all_hdph02";
    $str="select * from $q2";
    $result=mysql_query($str) or die('SQL语句有误');
    while(!!$row=mysql_fetch_array($result)){
        $iniFile->addCategory('排行榜名字', [$row['id']=> $row['wjmz']]);
        $iniFile->addCategory('排行榜值1', [$row['id']=> $row['wjid']]);
        $iniFile->addCategory('排行榜值2', [$row['id']=> $row['ds01']]);
        $iniFile->addCategory('排行榜值3', [$row['id']=> $row['vip']]);
        $iniFile->addCategory('排行榜值4', [$row['id']=> $row['id']]);
    }
}

$iniFile = new iniFile($file);
