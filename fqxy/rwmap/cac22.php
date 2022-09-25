<?php
//初始化
$rw1="";
$rw2="";
$rw3="";
$rw4="";
$rw5="";
$rw6="";
$npcc=54;//npcid
//初始化
include("./ini/zxrw_ini.php");

////////////////////任务属性//////////////
$rwidd=1;//任务的id
$rwfl=1;//任务的分类1主线2支线5日常4活动
include XY_DIR . "/rwmap/rwpd.php";


//第一个必须加变量转换
$xrwidd=$rwidd;
$xrwfl=$rwfl;
//第一个必须加变量转换

////////////////////任务属性//////////////



$rw1=($iniFile->getCategory('任务id'));
$rw2=($iniFile->getCategory('任务变量'));
$rw3=($iniFile->getCategory('已杀怪'));
$rw4=($iniFile->getCategory('要杀怪'));
$rw5=($iniFile->getCategory('任务分类'));
$rw6=($iniFile->getCategory('任务名字'));


include(XY_DIR . "/rwmap/cac22_ts.php");//任务提示

$rwstr=$rwidd."_".$rwfl;
$rid=$rw2[$rwstr];
// 任务与杨中顺无关，不做任何操作
if ($rid < 47 || $rid > 58) {
    $m = 0;
}

if ($m==1) {
	
$strr1=$xrwidd."_".$xrwfl."_".$npcc;

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=43;
$npc[]=$strr1;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>杨中顺（药品购买）</font></a>"."<br>";
} else {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=7;
$npc[]=$npcc;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>杨中顺（药品购买）</font></a>"."<br>";
}


////////////////////任务属性//////////////
$rwidd=1;//任务的id
$rwfl=2;//任务的分类1主线2支线5日常4活动
$rwmz="159转职任务〖关键〗";
include XY_DIR . "/rwmap/rwpd.php";

$rwstr=$rwidd."_".$rwfl;
$rid=$rw2[$rwstr] ?? 0;
if ($rid == 52) {
    $strr1=$rwidd."_".$rwfl."_".$npcc;
    show_image('ts/ts1.png');
    //cmd及超链接值
    $cmid=$cmid+1;
    $cdid[]=$cmid;
    $clj[]=43;
    $npc[]=$strr1;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>大事不妙了大仙！</font></a>"."<br>";
}






//查询npc是否有任务

?>







