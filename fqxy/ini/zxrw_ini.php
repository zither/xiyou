<?php

//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina = "zxrw.ini";
$path = 'ache/' . $wjid;
$file = $path . "/" . $inina;
if (file_exists($file)) {

} else {
    //连接数据库提取数据写入ini

    $inina = "zxrw.ini";
    $path = 'ache/' . $wjid;
    $file = $path . "/" . $inina;
    //创建文件
    file_put_contents($file, "[玩家任务]");
    # 实例化ini文件操作类，并载入 .ini文件
    $iniFile = new iniFile($file);
    $iniFile->addItem('任务id', ['初始' => 123]);
    $iniFile->addItem('任务变量', ['初始' => 123]);
    $iniFile->addItem('已杀怪', ['初始' => 123]);
    $iniFile->addItem('要杀怪', ['初始' => 123]);
    $iniFile->addItem('任务分类', ['初始' => 123]);
    $iniFile->addItem('任务名字', ['初始' => 123]);
    include("./sql/mysql.php");//调用数据库连接

    $q2 = "yxrw";
    $str = "select * from $q2 where wjid=$wjid";
    $result = mysql_query($str) or die('SQL语句有误');
    //把有值的数据存入一个数组
    $m = 0;
    while (!!$row = mysql_fetch_array($result)) {
        if ($row['rwfl'] == 1 || $row['rwfl'] == 2 || $row['rwfl'] == 4 || $row['rwfl'] == 5) {
            //过滤新任务系统已完成的任务
            if ($row['rwid'] > 1000 && $row['rwbl'] > 3) {
                continue;
            }
            $rw_str = $row['rwid'] . "_" . $row['rwfl'];
            $iniFile->addCategory('任务id', [$rw_str => $row['rwid']]);
            $iniFile->addCategory('任务变量', [$rw_str => $row['rwbl']]);
            $iniFile->addCategory('已杀怪', [$rw_str => $row['yisg']]);
            $iniFile->addCategory('要杀怪', [$rw_str => $row['ysg']]);
            $iniFile->addCategory('任务分类', [$rw_str => $row['rwfl']]);
            $iniFile->addCategory('任务名字', [$rw_str => $row['rwmz']]);
        }
    }
}

$iniFile = new iniFile($file);
