<?php

//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="xp.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;
if(file_exists($file)){

} else{
    //连接数据库提取数据写入ini

    $inina="xp.ini";
    $path='ache/'.$wjid;
    $file = $path."/".$inina;
    //创建文件
    file_put_contents($file,"[玩家星盘]");
    # 实例化ini文件操作类，并载入 .ini文件
    $iniFile = new iniFile($file);
    $iniFile->addItem('星盘id',['初始' => 0]);
    $iniFile->addItem('星盘开启',['初始' => 0]);
    include("./sql/mysql.php");//调用数据库连接
    $m=27;
    //Fixed 默认新建27个星盘记录，如果条目不够，直接补齐
    $q2="xp";
    $sql1=mysql_query("select count(*) as c from $q2 where wjid=$wjid",$conn);
    $info1=@mysql_fetch_array($sql1);
    $xlpd=$info1['c'];
    if ($xlpd < $m) {
        $m -= $xlpd;
        for($d=0;$d<$m;$d++){
            $q2 = "xp";
            $sql = "insert into $q2 (wjid,xpid,xpkq)  values('$wjid','0','0')";
            if (!mysql_query($sql, $conn)) {
                die('Error: ' . mysql_error());
            }
        }
    }

    //判断值是否存在
    $q2="xp";
    $str="select * from $q2 where wjid=$wjid";
    $result=mysql_query($str) or die('SQL语句有误');
    //把有值的数据存入一个数组
    $m=0;
    while(!!$row=mysql_fetch_array($result)){
        $iniFile->addCategory('星盘id', [$row['id']=> $row['xpid']]);
        $iniFile->addCategory('星盘开启', [$row['id']=> $row['xpkq']]);
    }
}

$iniFile = new iniFile($file);

