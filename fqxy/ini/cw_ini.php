<?php

//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="cw.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;
if(file_exists($file)){

} else{
    //连接数据库提取数据写入ini
    $inina="cw.ini";
    $path='ache/'.$wjid;
    $file = $path."/".$inina;
//创建文件
    file_put_contents($file,"[宠物信息]");
# 实例化ini文件操作类，并载入 .ini文件
    $iniFile = new iniFile($file);

    $iniFile->addItem('序列',['初始' => 123]);
    $iniFile->addItem('宠物id',['初始' => 1]);
    $iniFile->addItem('宠物名字',['初始' => 123]);
    $iniFile->addItem('宠物等级',['初始' => 123]);
    $iniFile->addItem('宠物星级',['初始' => 123]);
    $iniFile->addItem('宠物变异',['初始' => 123]);
    $iniFile->addItem('宠物品质',['初始' => 123]);
    $iniFile->addItem('宠物出战状态',['初始' => 123]);
//////////////////////////////////////////////////////
    $iniFile->addItem('宠物原始名字', ['初始' => 20]);
    $iniFile->addItem('宠物hp', ['初始' => 123]);
    $iniFile->addItem('宠物maxhp', ['初始' => 123]);
    $iniFile->addItem('宠物mp', ['初始' => 123]);
    $iniFile->addItem('宠物maxmp', ['初始' => 123]);
    $iniFile->addItem('宠物攻击', ['初始' => 123]);
    $iniFile->addItem('宠物魔攻', ['初始' => 123]);
    $iniFile->addItem('宠物防御', ['初始' => 123]);
    $iniFile->addItem('宠物冰攻', ['初始' => 123]);
    $iniFile->addItem('宠物火攻', ['初始' => 123]);
    $iniFile->addItem('宠物雷攻', ['初始' => 123]);
    $iniFile->addItem('宠物冰防', ['初始' => 123]);
    $iniFile->addItem('宠物火防', ['初始' => 123]);
    $iniFile->addItem('宠物雷防', ['初始' => 123]);
    $iniFile->addItem('宠物经验', ['初始' => 123]);

    $q2="cw";
    $str="select * from $q2 where wjid=$wjid";
    $result=mysql_query($str) or die('SQL语句有误');
//把有值的数据存入一个数组
    $m=0;
    while(!!$row=mysql_fetch_array($result)) {
        $m=$m+1;
        $npcc0=$row['cwid'];
        $npcc1=$row['id'];
        $cwidd=$npcc0."_".$npcc1;
        $iniFile->addCategory('序列', [$cwidd=>$m ]);
        $iniFile->addCategory('宠物id', [$cwidd=> $cwidd]);
        $iniFile->addCategory('宠物名字', [$cwidd=> $row['cwmz']]);
        $iniFile->addCategory('宠物等级', [$cwidd=> $row['cwdj']]);
        $iniFile->addCategory('宠物星级', [$cwidd=> $row['cwxj']]);
        $iniFile->addCategory('宠物变异', [$cwidd=> $row['cwby']]);
        $iniFile->addCategory('宠物品质', [$cwidd=> $row['cwxb']]);
        $iniFile->addCategory('宠物出战状态', [$cwidd=> $row['cwcz']]);
        $cwid=$npcc0;
//调用宠物基础信息
        include("./cw/cwxx.php");
        $iniFile->addCategory('宠物原始名字', [$cwidd=> $nname]);
        $iniFile->addCategory('宠物hp', [$cwidd=> $nhp]);
        $iniFile->addCategory('宠物maxhp', [$cwidd=> $nmaxhp]);
        $iniFile->addCategory('宠物mp', [$cwidd=> $nmp]);
        $iniFile->addCategory('宠物maxmp', [$cwidd=> $nmaxmp]);
        $iniFile->addCategory('宠物攻击', [$cwidd=> $ngj]);
        $iniFile->addCategory('宠物魔攻', [$cwidd=> $nmg]);
        $iniFile->addCategory('宠物防御', [$cwidd=> $nfy]);
        $iniFile->addCategory('宠物冰攻', [$cwidd=> $nbg]);
        $iniFile->addCategory('宠物火攻', [$cwidd=> $nhg]);
        $iniFile->addCategory('宠物雷攻', [$cwidd=> $nlg]);
        $iniFile->addCategory('宠物冰防', [$cwidd=> $nbf]);
        $iniFile->addCategory('宠物火防', [$cwidd=> $nhf]);
        $iniFile->addCategory('宠物雷防', [$cwidd=> $nlf]);
        $iniFile->addCategory('宠物雷防', [$cwidd=> $nlf]);
        $iniFile->addCategory('宠物经验', [$cwidd=> '0']);
    }
}

$iniFile = new iniFile($file);
