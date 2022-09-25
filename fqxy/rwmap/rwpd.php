<?php

$rwstr=$rwidd."_".$rwfl;
$rwpd=($iniFile->getItem('任务id',$rwstr));

//数据库为空则新增最开始的任务点
if ($rwpd=="") {
    $inina='zxrw.ini';
    $path='./ache/'.$wjid;
    //判断ini文件是否存在
    $ininame = $path."/".$inina;
    _unlink($ininame); //删除文件
    //获取最大值
    $q2="yxrw";
    $sql = "insert into $q2 (wjid,rwid,rwbl,rwmz,ysg,yisg,rwfl)  values('$wjid','$rwidd','1','$rwmz','0','0',$rwfl)";
    if (!mysql_query($sql)){
        die('Error: ' . mysql_error());
    }

    include XY_DIR . "/ini/zxrw_ini.php";
} else {

}

$m=$m+1;
//数据库为空则新增最开始的任务点