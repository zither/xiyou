<?php

//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="xl.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;
if(file_exists($file)){

} else{
    //连接数据库提取数据写入ini

    $inina="xl.ini";
    $path='ache/'.$wjid;
    $file = $path."/".$inina;
    //创建文件
    file_put_contents($file,"[玩家修炼]");
    # 实例化ini文件操作类，并载入 .ini文件
    $iniFile = new iniFile($file);

    $iniFile->addItem('修炼等级',['初始' => 123]);
    include("./sql/mysql.php");//调用数据库连接

    //判断值是否存在
    $xlidd=1;
    $q2="xl";
    $sql1=mysql_query("select xlid from $q2 where wjid=$wjid and xlid=$xlidd",$conn);
    $info1=@mysql_fetch_array($sql1);
    $xlpd=$info1['xlid'];
    if($xlpd ==""){
        $q2="xl";
        $sql = "insert into $q2 (wjid,xlid,xldj)  values('$wjid','$xlidd','0')";
        if (!mysql_query($sql,$conn)){
            die('Error: ' . mysql_error());
        }
    } else{
    }

    $xlidd=2;
    $q2="xl";
    $sql1=mysql_query("select xlid from $q2 where wjid=$wjid and xlid=$xlidd",$conn);
    $info1=@mysql_fetch_array($sql1);
    $xlpd=$info1['xlid'];
    if($xlpd ==""){
        $q2="xl";
        $sql = "insert into $q2 (wjid,xlid,xldj)  values('$wjid','$xlidd','0')";
        if (!mysql_query($sql,$conn)){
            die('Error: ' . mysql_error());
        }
    } else{
    }
    $xlidd=3;
    $q2="xl";
    $sql1=mysql_query("select xlid from $q2 where wjid=$wjid and xlid=$xlidd",$conn);
    $info1=@mysql_fetch_array($sql1);
    $xlpd=$info1['xlid'];
    if($xlpd ==""){
        $q2="xl";
        $sql = "insert into $q2 (wjid,xlid,xldj)  values('$wjid','$xlidd','0')";
        if (!mysql_query($sql,$conn)){
            die('Error: ' . mysql_error());
        }
    } else{
    }

    $xlidd=4;
    $q2="xl";
    $sql1=mysql_query("select xlid from $q2 where wjid=$wjid and xlid=$xlidd",$conn);
    $info1=@mysql_fetch_array($sql1);
    $xlpd=$info1['xlid'];
    if($xlpd ==""){
        $q2="xl";
        $sql = "insert into $q2 (wjid,xlid,xldj)  values('$wjid','$xlidd','0')";
        if (!mysql_query($sql,$conn)){
            die('Error: ' . mysql_error());
        }
    } else{
    }

    $q2="xl";
    $str="select * from $q2 where wjid=$wjid";
    $result=mysql_query($str) or die('SQL语句有误');
    //把有值的数据存入一个数组
    $m=0;
    while(!!$row=mysql_fetch_array($result)){
        $iniFile->addCategory('修炼等级', [$row['xlid']=> $row['xldj']]);
    }
}

$iniFile = new iniFile($file);
