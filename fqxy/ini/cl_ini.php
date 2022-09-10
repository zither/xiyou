<?php

$inina="cl.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;
if(!file_exists($file)){
    $inina="cl.ini";
    $path='ache/'.$wjid;
    $file = $path."/".$inina;
    file_put_contents($file,"[玩家背包]");
    $iniFile = new iniFile($file);
    $iniFile->addItem('序列',['初始' => 123]);
    $iniFile->addItem('材料id',['初始' => 1]);
    $iniFile->addItem('材料数量',['初始' => 123]);
    $iniFile->addItem('材料名字',['初始' => 123]);

    $q2="wp";
    $str="select wpid,wpsl,wpfl from $q2 where wjid=$wjid";
    $result=mysql_query($str) or die('SQL语句有误');
    $m=0;
    while(!!$row=mysql_fetch_array($result)){
        if($row['wpfl']==2){
            if($row['wpsl']>0){
                $m=$m+1;
                $npcc=$row['wpid'];
                $iniFile->addCategory('序列', [$row['wpid']=>$m ]);
                $iniFile->addCategory('材料id', [$m=> $row['wpid']]);
                $iniFile->addCategory('材料数量', [$row['wpid']=> $row['wpsl']]);
                include("./wp/wpxx.php");
                $iniFile->addCategory('材料名字', [$row['wpid']=> $wpmz]);
            }
        }
    }
}

$iniFile = new iniFile($file);
