<?php
//初始化
$rw1="";
$rw2="";
$rw3="";
$rw4="";
$rw5="";
$rw6="";
$npcc=146;//npcid
//初始化
include("./ini/zxrw_ini.php");

////////////////////任务属性//////////////
$rwidd=1;//任务的id
$rwfl=1;//任务的分类1主线2支线5日常4活动


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


include("./rwmap/rwpdd.php");//调用任务判断

if ($rid==366||$rid==367) {

$strr1=$xrwidd."_".$xrwfl."_5197";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=43;
$npc[]=$strr1;

if ($rid==366) {
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/ts/ts1.png';
	echo '<img src="'.$img.' "alt="图片"/〉';
	echo "<br>";
} else{
echo "<font color=black>！</font>"; 

}
  //////////////////////////////////////插入图片  //////////////////////////
   } elseif ($rid==367) {
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


if ($rid==365||$rid==366||$rid==367||$rid==368||$rid==369) {

$strr1=$xrwidd."_".$xrwfl."_5196";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=43;
$npc[]=$strr1;

if ($rid==365||$rid==367||$rid==368) {
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/ts/ts1.png';
	echo '<img src="'.$img.' "alt="图片"/〉';
	echo "<br>";
} else{
echo "<font color=black>！</font>"; 

}
  //////////////////////////////////////插入图片  //////////////////////////
   } elseif ($rid==366||$rid==369) {
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

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>清清</font></a>"."<br>";
}













if ($rid==363) {



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=712;

if ($rid==363) {
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/ts/ts1.png';
	echo '<img src="'.$img.' "alt="图片"/〉';
	echo "<br>";
} else{
echo "<font color=black>！</font>"; 

}
  //////////////////////////////////////插入图片  //////////////////////////
   } elseif ($rid==363) {
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

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>杀死赤血龙王</font></a>"."<br>";
}

if ($rid==362||$rid==363||$rid==364||$rid==365) {


$strr1=$xrwidd."_".$xrwfl."_5197";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=43;
$npc[]=$strr1;

if ($rid==362||$rid==364) {
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/ts/ts1.png';
	echo '<img src="'.$img.' "alt="图片"/〉';
	echo "<br>";
} else{
echo "<font color=black>！</font>"; 

}
  //////////////////////////////////////插入图片  //////////////////////////
   } elseif ($rid==363||$rid==365) {
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

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>赤血龙王</font></a>"."<br>";
}




if ($rid==361) {


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=711;

if ($rid==361) {
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/ts/ts1.png';
	echo '<img src="'.$img.' "alt="图片"/〉';
	echo "<br>";
} else{
echo "<font color=black>！</font>"; 

}
  //////////////////////////////////////插入图片  //////////////////////////
   } elseif ($rid==361) {
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

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>杀死喽罗</font></a>"."<br>";
}


if ($rid==358||$rid==359||$rid==360||$rid==361) {


$strr1=$xrwidd."_".$xrwfl."_5197";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=43;
$npc[]=$strr1;
if ($rid==358||$rid==359||$rid==360) {
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/ts/ts1.png';
	echo '<img src="'.$img.' "alt="图片"/〉';
	echo "<br>";
} else{
echo "<font color=black>！</font>"; 

}
  //////////////////////////////////////插入图片  //////////////////////////
   } elseif ($rid==361) {
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

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>赤血龙王</font></a>"."<br>";
}



if ($rid==356||$rid==357||$rid==358) {


$strr1=$xrwidd."_".$xrwfl."_5196";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=43;
$npc[]=$strr1;

if ($rid==356||$rid==357) {
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/ts/ts1.png';
	echo '<img src="'.$img.' "alt="图片"/〉';
	echo "<br>";
} else{
echo "<font color=black>！</font>"; 

}
  //////////////////////////////////////插入图片  //////////////////////////
   } elseif ($rid==358) {
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

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>血池</font></a>"."<br>";
}


?>







