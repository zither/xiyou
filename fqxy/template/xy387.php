<?php

include("./ini/boss_ini.php");
$npcc=($iniFile->getItem('世界BOSS属性','初始'));
$bossid=$npcc;

if($bossid==1||$bossid==2){//国战大门中门
    $bosspd=($iniFile->getItem('世界BOSS属性','击杀'));
    if($bosspd==1){
        include("./ini/zt_ini.php");
        $name=($iniFile->getItem('玩家信息','玩家名字'));
        include("./ini/boss_ini.php");
        $iniFile->updItem('世界BOSS属性', ['击杀' => '2']);//写入战斗页面
        $iniFile->updItem('世界BOSS属性', ['击杀人' => $name]);//写入战斗页面
        echo "<font color=black>".$nname."被你打开了！！！</font>"."<br>";
        $xtxx="众人拾柴火焰高战场".$nname."已被攻破！！请防守方加强防守！！";
        include("./msg/msgg02.php");
    } else{
        include("./ini/boss_ini.php");
        $name=($iniFile->getItem('世界BOSS属性','击杀人'));
        echo "<font color=black>".$nname."已被".$name."打开了！！！</font>"."<br>";
    }

} elseif ($bossid==3||$bossid==4||$bossid==5||$bossid==6){//国战四大神兽
    $bosspd=($iniFile->getItem('世界BOSS属性','击杀'));
    if($bosspd==1){
        include("./ini/zt_ini.php");
        $name=($iniFile->getItem('玩家信息','玩家名字'));
        $bpid=($iniFile->getItem('玩家信息','帮派id'));
        include("./ini/boss_ini.php");
        $iniFile->updItem('世界BOSS属性', ['击杀' => '2']);//写入战斗页面
        $iniFile->updItem('世界BOSS属性', ['击杀人' => $name]);//写入战斗页面
        echo "<font color=black>".$nname."被你打死了！！！</font>"."<br>";

        //增加国战积分
        gz03_zj($bpid, 10);
        gz04_zj($wjid, 10);
        echo "<font color=blue>击杀敌对国家玩家获得国家积分+10，个人积分+10</font>"."<br>";
        $xtxx="【神兽守卫】已被".$bpmz."的".$uname."击杀了，请防守方加强防守！！";
        include("./msg/msgg02.php");
        echo "<font color=black>获得国家积分+10</font>"."<br>";
    } else{
        include("./ini/boss_ini.php");
        $name=($iniFile->getItem('世界BOSS属性','击杀人'));
        echo "<font color=black>".$nname."已被".$name."击杀了！！！</font>"."<br>";
    }

    //四大boss被击杀加入快传送多仗
    $bossid=3;
    include("./ini/boss_ini.php");
    $yjdm1=($iniFile->getItem('世界BOSS属性','血'));
    $bossid=4;
    include("./ini/boss_ini.php");
    $yjdm2=($iniFile->getItem('世界BOSS属性','血'));
    $bossid=5;
    include("./ini/boss_ini.php");
    $yjdm3=($iniFile->getItem('世界BOSS属性','血'));
    $bossid=6;
    include("./ini/boss_ini.php");
    $yjdm4=($iniFile->getItem('世界BOSS属性','血'));
    include("./ini/gz01_ini.php");

    $weekarray = array("7","1","2","3","4","5","6");
    $zcid = $weekarray[date("w")];
    $zlgjid=($iniFile->getItem('国家id', $zcid));

    include("./ini/zt_ini.php");
    $bpid=($iniFile->getItem('玩家信息','帮派id'));
    if($yjdm1<=0&&$yjdm2<=0&&$yjdm3<=0&&$yjdm4<=0){
        $cmid=$cmid+1;
        $cdid[]=$cmid;
        $clj[]=20;
        $npc[]=162;
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【立即前往密室】</font></a>"."<br>";
        echo "<font color=red>提示：守方四大【神兽守卫】已阵亡，即刻可以立即传送到密室抢夺【国家权杖】</font>"."<br>";
        include("./ini/gz01_ini.php");
        //夺杖变量
        $iniFile->updItem('夺仗人', ['初始' => '1']);//写入战斗页面
    } else {
        echo "<font color=black>守方四大【神兽守卫】：</font>"."<br>";
        if($yjdm1<=0){
            echo "<font color=red>【神兽守卫】（1,1）已击杀</font>"."<br>";
        } else{
            echo "<font color=black>【神兽守卫】（1,1）</font>"."<br>";
        }
        if($yjdm2<=0){
            echo "<font color=red>【神兽守卫】（2,1）已击杀</font>"."<br>";
        } else{
            echo "<font color=black>【神兽守卫】（2,1）</font>"."<br>";
        }
        if($yjdm3<=0){
            echo "<font color=red>【神兽守卫】（2,0）已击杀</font>"."<br>";
        } else{
            echo "<font color=black>【神兽守卫】（2,0）</font>"."<br>";
        }
        if($yjdm4<=0){
            echo "<font color=red>【神兽守卫】（1,0）已击杀</font>"."<br>";
        } else{
            echo "<font color=black>【神兽守卫】（1,0）</font>"."<br>";
        }
    }
} elseif ($bossid==7||$bossid==8||$bossid==9||$bossid==10){//世界boss
    $bosspd=($iniFile->getItem('世界BOSS属性','击杀'));
    //判断依据
    if($bosspd==1){
        include("./ini/zt_ini.php");
        $name=($iniFile->getItem('玩家信息','玩家名字'));
        include("./ini/boss_ini.php");
        $iniFile->updItem('世界BOSS属性', ['击杀' => '2']);//写入战斗页面
        $iniFile->updItem('世界BOSS属性', ['击杀人' => $name]);//写入战斗页面
        include("./ini/bosstime_ini.php");
        $nowtime=date('Y-m-d H:i:s');
        $iniFile->updItem('死亡时间',['初始' => $nowtime]);
        echo "<font color=black>".$nname."被你击杀了！！！</font>"."<br>";
        include("./wj/bossdl07.php");
        $xtxx="众人拾柴火焰高世界boss".$nname."已被".$name."击杀！！获得".$dlwpts;
        include("./msg/msgg02.php");
    } else{
        include("./ini/boss_ini.php");
        $name=($iniFile->getItem('世界BOSS属性','击杀人'));
        echo "<font color=black>".$nname."已被".$name."击杀！！</font>"."<br>";
    }
} elseif ($bossid==11){//充值boss
    $bosspd=($iniFile->getItem('世界BOSS属性','击杀'));
    if($bosspd==1){
        include("./ini/zt_ini.php");
        $name=($iniFile->getItem('玩家信息','玩家名字'));
        include("./ini/boss_ini.php");
        $iniFile->updItem('世界BOSS属性', ['击杀' => '2']);//写入战斗页面
        $iniFile->updItem('世界BOSS属性', ['击杀人' => $name]);//写入战斗页面
        include("./ini/bosstime_ini.php");
        $nowtime=date('Y-m-d H:i:s');
        $iniFile->updItem('死亡时间',['初始' => $nowtime]);

        echo "<font color=black>".$nname."被你击杀了！！！</font>"."<br>";

        include("./wj/bossdl11.php");
        $xtxx="众人拾柴火焰高世界boss".$nname."已被".$name."击杀！！获得".$dlwpts;
        include("./msg/msgg02.php");
        include("./ini/czjf_ini.php");
        $iniFile->updItem('召唤', ['初始' => '0']);
    } else{
        include("./ini/boss_ini.php");
        $name=($iniFile->getItem('世界BOSS属性','击杀人'));
        echo "<font color=black>".$nname."已被".$name."击杀！！</font>"."<br>";
    }
} elseif ($bossid==12){//充值boss
    $bosspd=($iniFile->getItem('世界BOSS属性','击杀'));
    if($bosspd==1){
        include("./ini/zt_ini.php");
        $name=($iniFile->getItem('玩家信息','玩家名字'));
        include("./ini/boss_ini.php");
        $iniFile->updItem('世界BOSS属性', ['击杀' => '2']);//写入战斗页面
        $iniFile->updItem('世界BOSS属性', ['击杀人' => $name]);//写入战斗页面
        include("./ini/bosstime_ini.php");
        $nowtime=date('Y-m-d H:i:s');
        $iniFile->updItem('死亡时间',['初始' => $nowtime]);
        echo "<font color=black>".$nname."被你击杀了！！！</font>"."<br>";

        include("./wj/bossdl11.php");
        $xtxx="众人拾柴火焰高世界boss".$nname."已被".$name."击杀！！获得".$dlwpts;
        include("./msg/msgg02.php");
        include("./ini/czjf_ini.php");
        $iniFile->updItem('召唤1', ['初始' => '0']);
    } else{
        include("./ini/boss_ini.php");
        $name=($iniFile->getItem('世界BOSS属性','击杀人'));
        echo "<font color=black>".$nname."已被".$name."击杀！！</font>"."<br>";
    }
}

//$zhblq=$npcc;
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>继续走</font></a>"."<br>";

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
