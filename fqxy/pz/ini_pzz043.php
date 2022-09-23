<?php

//调用zt.ini是否存在
include("./ini/zt_ini.php");
$lvll=($iniFile->getItem('玩家信息','等级'));
if($lvll<$lvl){
    $q2="all_zt";
    $bbrlb=($iniFile->getItem('玩家信息','背包容量'));
    $lvl2=$lvl-$lvll;
    $bbrlb=$lvl2*50+$bbrlb;
    $strsql = "update $q2 set dj=$lvl,bbrl=$bbrlb where wjid=$wjid";//物品id号必改值
    $result = mysql_query($strsql);
    $iniFile->updItem('玩家信息', ['等级' => $lvl]);
    $iniFile->updItem('玩家信息', ['经验' => 0]);
    $iniFile->updItem('玩家信息', ['背包容量' => $bbrlb]);
    $npcc1=$npcc;
    //升级更新属性
    $inina="ztt.ini";
    $path='ache/'.$wjid;
    $ininame = $path."/".$inina;
    _unlink($ininame); //删除文件

    include("wj/ztt.php");
    include("./ini/zt_ini.php");
    $iniFile->updItem('玩家信息', ['红' => $wjxx1['血'],'蓝' => $wjxx1['蓝]']]);
    echo "<font color=red>恭喜你！升级了（目前等级：".$lvl."级）</font><br>";
    $npcc=$npcc1;
} else{
    echo "<font color=black>对不起！！您使用的【升级卡】目前等级已超过限制（已做回收处理）</font>"."<br>";
}
