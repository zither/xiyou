<?php

//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="bpp".$bpid.".ini";
$path='acher/bp';
if (!file_exists($path)) {
    mkdir($path, 0755, true);
}
$file = $path."/".$inina;
if(file_exists($file)){

}else{
    $inina="bpp".$bpid.".ini";
    $path='acher/bp';
    $file = $path."/".$inina;
    file_put_contents($file,"[国家]");

    $iniFile = new iniFile($file);
    $iniFile->addItem('序列',['初始' => 123]);
    $iniFile->addItem('名字',['初始' => 123]);
    $iniFile->addItem('名字id',['初始' => 123]);
    $iniFile->addItem('贡献',['初始' => 123]);
    $iniFile->addItem('历史贡献',['初始' => 123]);
    $iniFile->addItem('国战死亡次数',['初始' => 123]);
    $iniFile->addItem('国战积分',['初始' => 123]);

    include("./sql/mysql.php");//调用数据库连接
    $q2="bp";
    $str="select * from $q2 where bpid = $bpid";
    $result=mysql_query($str) or die('SQL语句有误');
    $mm=0;
    while(!!$row=mysql_fetch_array($result)){
        $mm=$mm+1;
        $iniFile->addCategory('序列', [$row['userid']=>$mm]);
        $iniFile->addCategory('名字', [$mm=> $row['usermz']]);
        $iniFile->addCategory('名字id', [$mm=> $row['userid']]);
        $iniFile->addCategory('贡献', [$mm=> $row['gx']]);
        $iniFile->addCategory('历史贡献', [$mm=> $row['lsgx']]);
        $iniFile->addCategory('国战死亡次数', [$mm=> $row['bpswcs']]);
        $iniFile->addCategory('国战积分', [$mm=> $row['bpjf']]);
    }
}
$iniFile = new iniFile($file);
