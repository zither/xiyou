<?php

//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina = "jn.ini";
$path = 'ache/' . $wjid;
$file = $path . "/" . $inina;
if (file_exists($file)) {

} else {
    //连接数据库提取数据写入ini

    $inina = "jn.ini";
    $path = 'ache/' . $wjid;
    $file = $path . "/" . $inina;
    file_put_contents($file, "[玩家技能]");
    $iniFile = new iniFile($file);
    $iniFile->addItem('序列', ['初始' => 123]);
    $iniFile->addItem('技能id', ['初始' => 1]);
    $iniFile->addItem('技能名字', ['初始' => 123]);
    $iniFile->addItem('技能等级', ['初始' => 123]);
    include("./sql/mysql.php");//调用数据库连接
    $q2 = "jnn" ;
    $str = "select id,jnid,jndj from $q2 where wjid=$wjid";
    $result = mysql_query($str) or die('SQL语句有误');
    $m = 0;
    while (!!$row = mysql_fetch_array($result)) {
        $m = $m + 1;
        $iniFile->addCategory('序列', [$row['jnid'] => $m]);
        $iniFile->addCategory('技能id', [$m => $row['jnid']]);
        $iniFile->addCategory('技能等级', [$row['jnid'] => $row['jndj']]);
        $jnidd = $row['jnid'];
        //include("./wp/jnxx.php");
        include XY_DIR . '/helper/jn.php';
        $iniFile->addCategory('技能名字', [$row['jnid'] => $jnmz]);
    }
}

$iniFile = new iniFile($file);
