<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){


//调用hy.ini是否存在
include("./ini/hy_ini.php");


# 获取一个分类下所有数据
$hyfl=($iniFile->getCategory('好友分类'));

# 获取一个分类下所有数据
$hyidd=($iniFile->getCategory('序列'));


$m=0;

$m=count($hyfl,0)-1; 
$i=0;

$ym=$hyfl['初始'];

$km=0;

foreach(array_keys($hyfl) as $key){
$keyhyfl[]=$hyfl[$key];
}
foreach(array_keys($hyidd) as $key){
$keyhyidd[]=$hyidd[$key];
}

$tmp="排序";
$arr=$keyhyidd;
foreach( $arr as $k=>$v) {
    if($tmp == $v) unset($arr[$k]);
}


sort($keyhyidd);
$xxh=0;


//将ini值存入数组方便使用
for($d=0;$d<$m;$d++){
$i=$i+1;
$svl=$keyhyfl[$i];

if($svl ==2){

} elseif($svl ==1){
	$xxh=$xxh+1;
} else{

}

}
echo "<font color=black>请选择邀请进入的好友</font>"."<br>";
echo "<font color=black>好友列表（".$xxh."个）</font><br>";






$i=-1;
$xxh=0;




for($d=0;$d<$m;$d++){
$i=$i+1;

$keyidd=$keyhyidd[$i];

# 获取一个分类下某个子项的值
$ivd=($iniFile->getItem('好友id',$keyidd));

# 获取一个分类下某个子项的值
$mvz=($iniFile->getItem('好友名字',$keyidd));
# 获取一个分类下某个子项的值
$svl=($iniFile->getItem('好友分类',$keyidd));

/*
$ivd=$keyhyid[$i];
$mvz=$keyhymz[$i];
$svl=$keyhyfl[$i];
*/

if($svl ==2){

} elseif($svl ==1){
$xxh=$xxh+1;	
echo "<font color=black>".$xxh.".</font>";	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=93;
$npc[]=$ivd;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$mvz."</font></a>";
echo "<font color=black>|</font>";

	//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=167;
$npc[]=$ivd;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>邀请</font></a>"."<br>";
	
} else{

}








}

if($xxh ==0){
	echo "<font color=black>目前还没有结交到好友</font>"."<br>";
	
	
} else{

}




echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";

echo "<font color=black>----------------------</font>"."<br>";
//cmd及超链接值
include("fhgame.php");



























} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini
?>