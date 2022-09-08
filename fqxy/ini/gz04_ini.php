<?php

$inina="gz04.ini";
$path='acher/guoz';
$file = $path."/".$inina;

//伪装缓存操作，实际不进行任何文件操作
$fake = true;
$iniFile = new iniFile($file, $fake);
$iniFile->addItem('id',['初始' => 0]);
$iniFile->addItem('玩家名字',['初始' => 0]);
$iniFile->addItem('玩家id',['初始' => 0]);
$iniFile->addItem('个人积分',['初始' => 0]);
$iniFile->addItem('领取情况',['初始' => 0]);

$q2="gz04";
$str="select * from $q2";
$result=mysql_query($str) or die('SQL语句有误');
while(!!$row=mysql_fetch_array($result)){
    $iniFile->addCategory('id', [$row['id']=>$row['id']]);
    $iniFile->addCategory('玩家名字', [$row['wjid']=>$row['wjname']]);
    $iniFile->addCategory('玩家id', [$row['wjid']=>$row['wjid']]);
    $iniFile->addCategory('个人积分', [$row['wjid']=>$row['wjgzjf']]);
    $iniFile->addCategory('领取情况', [$row['wjid']=>$row['wjlq']]);
}
