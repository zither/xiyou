<?php
//初始化
$rw1=[];
$rw2=[];
$rw3=[];
$rw4=[];
$rw5=[];
$rw6=[];
$npcc=20;//npcid
//初始化
include("./ini/zxrw_ini.php");
$m=0;

//首次接取任务	
////////////////////任务属性//////////////
$rwidd=1;//任务的id
$rwfl=1;//任务的分类1主线2支线5日常4活动
include("./rwmap/rwpd.php");


//第一个必须加变量转换
$xrwidd=$rwidd;
$xrwfl=$rwfl;



////////////////////任务属性//////////////
$rwidd=1;//任务的id
$rwfl=2;//任务的分类1主线2支线5日常4活动
$rwmz="159转职任务〖关键〗";
include XY_DIR . "/rwmap/rwpd.php";



$rw1=($iniFile->getCategory('任务id'));
$rw2=($iniFile->getCategory('任务变量'));
$rw3=($iniFile->getCategory('已杀怪'));
$rw4=($iniFile->getCategory('要杀怪'));
$rw5=($iniFile->getCategory('任务分类'));
$rw6=($iniFile->getCategory('任务名字'));


$xrwpd = 0;
//主线任务检查
$rid = $rw2["1_1"] ?? 0;
if ($rid==392||$rid==393||$rid==394) {
    $xrwpd = 1;
	//Fixed: 修正任务分类，这里只能是主线任务，分类为1
    $xrwfl = 1;
	$strr1=$xrwidd."_".$xrwfl."_5196";
	//cmd及超链接值
	$cmid=$cmid+1;
	$cdid[]=$cmid;
	$clj[]=43;
	$npc[]=$strr1;

	if ($rid==393) {
		///////////////////////////////////////插入图片 /////////////////////////////
		if ($tpbl==1) {
			$img='pic/ts/ts1.png';
			echo '<img src="'.$img.' "alt="图片"/〉';
			echo "<br>";
		} else{
			echo "<font color=black>！</font>";

		}
		//////////////////////////////////////插入图片  //////////////////////////
	} elseif ($rid==394) {
		///////////////////////////////////////插入图片 /////////////////////////////
		if ($tpbl==1) {
			$img='pic/ts/ts2.png';
			echo '<img src="'.$img.' "alt="图片"/〉';
			echo "<br>";
		} else{
			echo "<font color=black>？</font>";

		}
		//////////////////////////////////////插入图片  //////////////////////////
	}
	echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>萧晓月</font></a>"."<br>";
}


//直线任务检查
$zt_ini = ini_file($wjid, XY_DIR . '/ini/zt_ini.php');
$wjdj =  $zt_ini->getItem('玩家信息', '等级');
$rid = $rw2["1_2"] ?? 0;
if (in_array($rid, [1, 2, 3]) && isset($wjdj) && $wjdj >= 150) {
	if ($xrwpd == 0) {
		$xrwidd = 1;
		$xrwfl = 2;
	}
	$xrwpd = 1;
}

include("./rwmap/cac0_ts.php");//任务提示
show_image('npc/npc2.png');
if ($xrwpd == 1) {
	$strr1=$xrwidd."_".$xrwfl."_".$npcc;
	$cmid=$cmid+1;
	$cdid[]=$cmid;
	$clj[]=43;
	$npc[]=$strr1;
	echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>李白(活动传送)</font></a>"."<br>";
} else {
	$cmid=$cmid+1;
	$cdid[]=$cmid;
	$clj[]=7;
	$npc[]=$npcc;
	echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>李白(活动传送)</font></a>"."<br>";
}












//查询npc是否有任务

?>







