<?php

//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="gz05.ini";
$path='acher/guoz';
$file = $path."/".$inina;
if(file_exists($file)){

} else{
    //连接数据库提取数据写入ini
    $inina="gz05.ini";
    $path='acher/guoz';
    $file = $path."/".$inina;
    file_put_contents($file,"[国战信息]");
    $iniFile = new iniFile($file);
    $iniFile->addItem('国战判断时间',['初始' => 0]);

    $q2="gz05";
    $str="select * from $q2";
    $result=mysql_query($str) or die('SQL语句有误');
    while(!!$row=mysql_fetch_array($result)){
        $iniFile->addCategory('国战判断时间', [$row['id']=>$row['gztime']]);
    }
}

$iniFile = new iniFile($file);
