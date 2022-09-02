<?php

$zhblq=$npcc;
include("./wj/jfdj.php");//解封等级
//调用zt.ini是否存在
include("./ini/zt_ini.php");


# 获取一个分类下某个子项的值
$jykg=($iniFile->getItem('玩家信息','修炼经验开关'));
$lvl=($iniFile->getItem('玩家信息','等级'));
$jy1=($iniFile->getItem('玩家信息','经验'));
$xljy1=($iniFile->getItem('玩家信息','修炼经验'));

//当前等级升级所需要的经验
$lvl1=($lvl+1)*($lvl+1)*($lvl+1)*($lvl+2)+200;
//当前等级升级所需要的经验
$lvl2=(($lvl+1)*($lvl+1)*($lvl+1)*($lvl+1)*($lvl+2)+100);
$sypt=1;
if($jykg ==0){
	if($lvl>=$jfdj&&$jy1 >=$lvl1){
		$wpsy=1;//使用失败
		echo "<font color=red>对不起！经验已满（升级提升经验储备）</font><br>";
	} else{
		$sypt=2;
	}
} elseif ($jykg==1) {
	if($xljy1 ==$lvl2){
		$wpsy=1;//使用失败
		echo "<font color=red>对不起！修炼经验已满（升级提升修炼经验储备）</font><br>";

	} else{
		$sypt=2;
	}
}

if($sypt ==2){
	include("./ini/wpp_ini.php");
	$q2="wpp";
	$wwpid=$npcc;

	$y= date('Y')*1;
	$m= date('m')*1;
	$d= date('d')*1;
	$h= date('H')*1;
	$i= date('i')*1;
	$s= date('s')*1;

	$inina="wpp.ini";
	$path='ache/'.$wjid;
	$ininame = $path."/".$inina;

    //检测时间
    $b1=($iniFile->getItem('物品时间年',$wwpid)) ?? 0;
    $b2=($iniFile->getItem('物品时间月',$wwpid)) ?? 0;
    $b3=($iniFile->getItem('物品时间日',$wwpid)) ?? 0;
    $b4=($iniFile->getItem('物品时间时',$wwpid));
    $b5=($iniFile->getItem('物品时间分',$wwpid));
    $b6=($iniFile->getItem('物品时间秒',$wwpid));
	$wjwp=($iniFile->getItem('物品使用次数',$wwpid));

    $new_day = date('Y-n-j') != sprintf('%d-%d-%d', $b1, $b2, $b3);
	if ($b1 == 0) {
        // 药品使用记录不存在
        //新增数据
        $sql1 = "insert into $q2 (wjid,wpid,n,y,r,s,f,m,wpcs)  values('$wjid','$npcc','$y','$m','$d','$h','$i','$s',1)";
        if (!mysql_query($sql1)) {
            die('Error: ' . mysql_error());
        }
        _unlink($ininame);
        $day = 1;
        //调用wpp.ini是否存在
        include("./ini/wpp_ini.php");
    } elseif ($new_day) {
	    // 新的一天，重置使用次数
        $q2="wpp";
        $strsql = "update $q2 set wpcs=1,n=$y,y=$m,r=$d,s=$h,f=$i,m=$s where wjid=$wjid and wpid=$wwpid";//物品id号必改值
        $result = mysql_query($strsql);
        $iniFile->updItem('物品使用次数', [$wwpid => '1']);
        $iniFile->updItem('物品时间年', [$wwpid => $y]);
        $iniFile->updItem('物品时间月', [$wwpid => $m]);
        $iniFile->updItem('物品时间日', [$wwpid => $d]);
        $iniFile->updItem('物品时间时', [$wwpid => $h]);
        $iniFile->updItem('物品时间分', [$wwpid => $i]);
        $iniFile->updItem('物品时间秒', [$wwpid => $s]);
        $day = 1;
    } elseif ($wjwp <$xzcs){
	    // 同一天使用，则增加使用次数
		$xwpsl=$wjwp+1;
		$q2="wpp";
		$strsql = "update $q2 set wpcs=$xwpsl,n=$y,y=$m,r=$d,s=$h,f=$i,m=$s where wjid=$wjid and wpid=$wwpid";//物品id号必改值
		$result = mysql_query($strsql);
		//数据库修改
		//缓存修改
		$iniFile->updItem('物品使用次数', [$wwpid => $xwpsl]);
		$iniFile->updItem('物品时间年', [$wwpid => $y]);
		$iniFile->updItem('物品时间月', [$wwpid => $m]);
		$iniFile->updItem('物品时间日', [$wwpid => $d]);
		$iniFile->updItem('物品时间时', [$wwpid => $h]);
		$iniFile->updItem('物品时间分', [$wwpid => $i]);
		$iniFile->updItem('物品时间秒', [$wwpid => $s]);
		//缓存修改
		$day=1;
	} elseif ($wjwp >=$xzcs) {
        $day=0;
	}

	if ($day==1) {
        //////////////////////////////////////////////////经验增加/////////////////////////////////////////
		include("./pz/ini_pz05.php");//调用ini缓存位置
        //////////////////////////////////////////////////经验增加/////////////////////////////////////////
		$wpsy=2;//使用成功
	} else{
		$wpsy=1;//使用失败
		echo "<font color=black>你今日已经使用".$wwpmz.$xzcs."次了！</font><br>";

	}
}

$npcc=$zhblq;
