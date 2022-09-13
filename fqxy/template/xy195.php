<?php



//调用zt.ini是否存在
include("./ini/zt_ini.php");
$bpid=($iniFile->getItem('玩家信息','帮派id'));
$bpmz=($iniFile->getItem('玩家信息','帮派名字'));



if($bpid>=1){

    $gz04 = gz04($wjid);
    $gj06 = $gz04['rjf'];
    $gj05 = $gz04['swcs'];

    include(XY_DIR . "/ini/gz03_ini.php");
    $gj03=($iniFile->getItem('国家日积分',$bpid));

    $week=zcid();
    //zlzc($week, $bpid, $wjid);

    $zlgjxx = gz01($week);
    $zlgj = $zlgjxx['zlgj'];
    $zlgjid = $zlgjxx['zlgjid'];
    if($zlgj!=""){
        $gj01=$zlgj;
    } else{
        $gj01="无";
    }
    if($bpid==$zlgjid){
        $gj02="防守方";
    } else{
        $gj02="进攻方";
    }

    echo "<font color=red>".$bpmz."的国战信息</font>"."<br>";
    echo "<font color=black>国家积分前三甲排名：</font>"."<br>";


    $gjpm = 0;
    $cjsj = date('Ymd');
    $gz03 = gz03(0, $cjsj, ['rjf' => 'DESC']);
    if (!empty($gz03)) {
        foreach ($gz03 as $i => $v) {
            $ik = $i + 1;
            if ($bpid == $v['gjid']) {
                $gjpm = $ik;
            }
            echo "<font color=black>$ik.".$v['gjmz']."(".$v['rjf']."分)</font></a>"."<br>";
        }
    } else {
        echo "<font color=black>当前无任何国家积分排名</font>" . "<br>";

    }

    if($week ==1){
        $zcwz="傲来国";
    } elseif($week ==2){
        $zcwz="宝象国";
    } elseif($week ==3){
        $zcwz="乌鸡国";
    } elseif($week ==4){
        $zcwz="女儿国";
    } elseif($week ==5){
        $zcwz="车迟国";
    } elseif($week ==7){
        $zcwz="祭赛国";
    } else{
        $zcwz="无";
        $kfsj="休整";
    }

    $gzjs=0;
    $h= date('H')*1;
    $i= date('i')*1;
    $s= date('s')*1;
    $yjf=30-$i-1;
    $yjm=60-$s-1;

    if($h ==21){
        if($yjf <=0){
            if($i <=29){
                echo "<font color=black>".$yjm."秒</font>"."<br>";
                $zcsj=$yjm."秒";
            } else{
                $zcsj="0秒";
            }
        } else{
            $zcsj=$yjf."分".$yjm."秒";
        }
    } else{
        $zcsj="0秒";
    }

    $gjxx = gz03($bpid);

    echo "<font color=black>----------------------</font>"."<br>";
    echo "<font color=black>国战剩余时间:".$zcsj."</font>"."<br>";
    echo "<font color=blue>当前防守：".$gj01."</font>"."<br>";
    echo "<font color=black>战场位置：【".$zcwz."】</font>"."<br>";
    echo "<font color=black>----------------------</font>"."<br>";
    echo "<font color=black>国家状态：【".$gj02."】</font>"."<br>";
    if ($gjpm) {
        echo "<font color=black>国家排名：【第" . $gjpm . "名】</font>" . "<br>";
    }
    echo "<font color=black>国家积分：【".$gj03."分】</font>"."<br>";
    echo "<font color=black>我的积分：【".$gj06."分】</font>"."<br>";
    echo "<font color=black>剩余死亡次数：【".$gj05."次】</font>"."<br>";


} else{

    echo "<font color=red>对不起！你还没有国家</font>"."<br>";
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







?>