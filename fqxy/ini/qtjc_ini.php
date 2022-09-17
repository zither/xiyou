<?php
$inina="qtjc.ini";
$path='acher/hdjc';
$file = $path."/".$inina;
if(!file_exists($file)){
    $inina="qtjc.ini";
    $path='acher/hdjc';
    $file = $path."/".$inina;
    file_put_contents($file,"[拳头竞猜]");
    $iniFile = new iniFile($file);
    $iniFile->addItem('排行榜名字',['初始' => 123]);
    $iniFile->addItem('排行榜值1',['初始' => 0]);
    $iniFile->addItem('排行榜值2',['初始' => 0]);
    $iniFile->addItem('排行榜值3',['初始' => 0]);
    $iniFile->addItem('排行榜值4',['初始' => 0]);
    $iniFile->addItem('排行榜值5',['初始' => 0]);
    $iniFile->addItem('排行榜值6',['初始' => 0]);

    $q2="all_qtjc";
    if(mysql_num_rows(mysql_query("SHOW TABLES LIKE '". $q2."'"))==1) {

    } else {
        $sql = " CREATE  TABLE  $q2 (  
    `id` int( 11  )  NOT  NULL AUTO_INCREMENT COMMENT  '编号id',
    `wjid` int( 11  )  NOT  NULL default  '0' COMMENT  '玩家id',
    `vip` int( 11  )  NOT  NULL default  '0' COMMENT  'vip等级',
    `wjmz` varchar(32) NOT  NULL  COMMENT  '玩家名字',
    `jcjg` varchar(255) NOT  NULL  COMMENT  '竞猜价格',
    `cq` int(11)  NOT  NULL default  '0' COMMENT  '出拳',
    `timex` varchar(32) NOT  NULL  COMMENT  '竞猜时间',
    PRIMARY KEY (`id`)
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci";
        mysql_query($sql);
    }

    $q2="all_qtjc";
    $str="select * from $q2";
    $result=mysql_query($str) or die('SQL语句有误');
    while(!!$row=mysql_fetch_array($result)){
        $iniFile->addCategory('排行榜名字', [$row['id']=> $row['wjmz']]);
        $iniFile->addCategory('排行榜值1', [$row['id']=> $row['wjid']]);
        $iniFile->addCategory('排行榜值2', [$row['id']=> $row['jcjg']]);
        $iniFile->addCategory('排行榜值3', [$row['id']=> $row['vip']]);
        $iniFile->addCategory('排行榜值4', [$row['id']=> $row['id']]);
        $iniFile->addCategory('排行榜值5', [$row['id']=> $row['cq']]);
        $iniFile->addCategory('排行榜值6', [$row['id']=> $row['timex']]);
    }
}

$iniFile = new iniFile($file);
