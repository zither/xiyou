<?php

//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="pkxx.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;
if(file_exists($file)){


}else{
    $inina="pkxx.ini";
    $path='ache/'.$wjid;
    $file = $path."/".$inina;
    file_put_contents($file,"[玩家]");
    $iniFile = new iniFile($file);
    $iniFile->addItem('怪物编号',['初始' => 123]);
    $iniFile->addItem('怪物1号属性',['初始' => 123]);
    $iniFile->addItem('怪物2号属性',['初始' => 123]);
    $iniFile->addItem('怪物3号属性',['初始' => 123]);
    $iniFile->addCategory('怪物编号', ['1号' => '0', '2号' => '0', '3号' => '0']);
    $iniFile->addCategory('怪物1号属性', ['名字' => '99999999','hp' => '99999999', 'mp' => '99999999','攻击' => '99999999','魔攻'=> '99999999','防御'=> '99999999','魔防'=> '99999999','冰攻'=> '999','火攻'=> '999','雷攻'=> '999','冰防'=> '999','火防'=> '999','雷防'=> '999']);
    $iniFile->addCategory('怪物2号属性', ['名字' => '99999999','hp' => '99999999', 'mp' => '99999999','攻击' => '99999999','魔攻'=> '99999999','防御'=> '99999999','魔防'=> '99999999','冰攻'=> '999','火攻'=> '999','雷攻'=> '999','冰防'=> '999','火防'=> '999','雷防'=> '999']);
    $iniFile->addCategory('怪物3号属性', ['名字' => '99999999','hp' => '99999999', 'mp' => '99999999','攻击' => '99999999','魔攻'=> '99999999','防御'=> '99999999','魔防'=> '99999999','冰攻'=> '999','火攻'=> '999','雷攻'=> '999','冰防'=> '999','火防'=> '999','雷防'=> '999']);
}
$iniFile = new iniFile($file);
