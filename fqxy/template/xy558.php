<?php
//阻塞代码防止出现脏数据//自己的id锁
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");

/////////公共锁
$path='acher/lock';//路径
$lockmz='czjf_lock.txt';//文件
include("./ini/all_lock.php");
/////////公共锁
if($zsspd==1&&$all_lock2==1){
    include("./ini/czjf_ini.php");
    $czjf=($iniFile->getItem('充值积分','初始'));
    $zhboss1=($iniFile->getItem('召唤1','初始'));

    $bossid=12;
    include("./ini/boss_ini.php");
    $hp2=($iniFile->getItem('世界BOSS属性','血'));

    if($czjf>=500 && ($hp2<=-1 || !$zhboss1)){
        include("./ini/czjf_ini.php");
        $czjf=$czjf-500;
        $iniFile->updItem('充值积分', ['初始' => $czjf]);
        $iniFile->updItem('召唤1', ['初始' => '2']);
        echo "<font color=black>恭喜你~~成功召唤出来【如意财神爷】击杀高倍掉宝，美滋滋，美滋滋，伤不起~~~</font>"."<br>";
        $bossmz="【如意财神爷】";
        $bossid=12;
        $inina="boss_".$bossid.".ini";
        $path='acher/all_boss';
        $ininame = $path."/".$inina;
        _unlink($ininame); //删除文件
        $xtxx=$bossmz."蓄力已满已被召唤开启！！请各路仙友前往击杀（美滋滋的爆率，爽歪歪的宝贝）";
        include("./msg/msgg02.php");
    } else{
        echo "<font color=black>对不起~~当前蓄力还未达到500点或者已召唤出来了</font>"."<br>";
    }

    $cmid=$cmid+1;
    $cdid[]=$cmid;
    $clj[]=2;
    $npc[]=0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
}

//解锁当前使用的ini
include("./ini/jszsini.php");
//解锁当前使用的ini


//解锁当前使用的ini
include("./ini/all_lock1.php");
//解锁当前使用的ini

