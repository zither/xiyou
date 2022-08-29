<?php

//路径
$path='ache/'.$wjid;
//ini文件名字
$inina="user.ini";
$ininame = $path."/".$inina;

# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);

//最大值
$a5=$cmid;
//将cmd最小最大值写入
$iniFile->updItem('验证信息', ['xcmid值' => $a4,'dcmid值' => $a5]);

//写入超链接及其所对应的值
$iniFile->delCategory('超链接值');
$iniFile->delCategory('超链接npc值');
$aa = $a5 - $a4 + 1;
for ($x = 0; $x < $aa; $x++) {
    $q3 = $cdid[$x];
    if (empty($q3)) {
        continue;
    }
    $q4 = $clj[$x];
    $q6 = $npc[$x];
    # 添加一个子项(如果子项存在，则覆盖;)
    $iniFile->addItem('超链接值', [$q3 => $q4]);
    $iniFile->addItem('超链接npc值', [$q3 => $q6]);
}
