<?php


//判断攻城报名表是否合法	
include(XY_DIR . "/ini/xtbl_ini.php");

$m= date('n');
$d= date('j');

if($xtbl1==$m&&$xtbl2==$d){
    $gztime1=1;
} else{
    $gztime1=2;
}

//判断攻城报名表是否合法
if($gztime1==2){
    gz_xtbl(1, $m, $d);
}

echo "<font color=black>[攻城-已报名的国家]</font>"."<br>";


include("./ini/yl_ini.php");
$iniFile->updItem('背包页面', ['页面id' => '192']);

$gj_arr = gz03();
$cygj = [];
$jt = date('Ymd');
foreach ($gj_arr as $v) {
    if ($v['cjsj'] != $jt) {
        continue;
    }
    $cygj[] = $v;
}

if(!empty($cygj)){
    foreach ($cygj as $i => $v) {
        echo "<font color=black>".($i + 1).".</font>";
        echo "<font color=black>".$v['gjmz']."（".$v['jzmz']."）</font>"."<br>";
    }
} else{
    echo "<font color=black>暂无任何国家报名参战</font>"."<br>";
}

echo "<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=187;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";









//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";

echo "<font color=black>----------------------</font>"."<br>";
//cmd及超链接值
include("fhgame.php");




















?>