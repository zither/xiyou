<?php

//调用zt.ini是否存在
include("./ini/zt_ini.php");
$bpid=($iniFile->getItem('玩家信息','帮派id'));
if($bpid>=1){
    $uname=($iniFile->getItem('玩家信息','玩家名字'));
    $bpmz=($iniFile->getItem('玩家信息','帮派名字'));
    include("./ini/bp_ini.php");
    $bp=($iniFile->getCategory('国家信息'));
    $xbzmz=$bp['现任君主'];
    $xwjid=$bp['现任君主id'];
    //点击国家权杖合法代码
    $bossid=1;
    include("./ini/boss_ini.php");
    $yjdm1=($iniFile->getItem('世界BOSS属性','血'));
    $bossid=2;
    include("./ini/boss_ini.php");
    $yjdm2=($iniFile->getItem('世界BOSS属性','血'));
    $bossid=3;
    include("./ini/boss_ini.php");
    $yjdm3=($iniFile->getItem('世界BOSS属性','血'));
    $bossid=4;
    include("./ini/boss_ini.php");
    $yjdm4=($iniFile->getItem('世界BOSS属性','血'));
    $bossid=5;
    include("./ini/boss_ini.php");
    $yjdm5=($iniFile->getItem('世界BOSS属性','血'));
    $bossid=6;
    include("./ini/boss_ini.php");
    $yjdm6=($iniFile->getItem('世界BOSS属性','血'));

    $zcid = zcid();

    $zlbpxx = zlbpxx($zcid);

    $zlgjid = $zlbpxx['zlgjid'];
    $zlgj = $zlbpxx['zlgj'];
    $czz = $zlbpxx['czz'];
    $czzpd = $czz ?? 1;
    if($zlgjid==$bpid||$zlgjid!=$bpid&&$boss1<=0&&$boss2<=0&&$boss3<=0&&$boss4<=0&&$boss5<=0&&$boss6<=0&&$czzpd!=2){
        if($zlgjid!=$bpid){
            //占领
            zlzc($zcid, $bpid, $wjid);

            include("./ini/gz01_ini.php");
            $iniFile->updItem('夺仗人', ['初始' => '2']);//写入战斗页面

            ////////////////////更新国战地图神兽大门血量//////////////
            ////////城池大门//////////
            $bossid=1;//世界boss-ID号
            $npcc=$bossid;
            $inina="boss_".$bossid.".ini";
            $path='acher/all_boss';
            $ininame = $path."/".$inina;
            _unlink($ininame); //删除文件
            include("./ini/boss_ini.php");


            ////////中门//////////
            $bossid=2;//世界boss-ID号
            $npcc=$bossid;
            $inina="boss_".$bossid.".ini";
            $path='acher/all_boss';
            $ininame = $path."/".$inina;
            _unlink($ininame); //删除文件
            include("./ini/boss_ini.php");

            ////////守卫//////////
            $bossid=3;//世界boss-ID号
            $npcc=$bossid;
            $inina="boss_".$bossid.".ini";
            $path='acher/all_boss';
            $ininame = $path."/".$inina;
            _unlink($ininame); //删除文件
            include("./ini/boss_ini.php");


            ////////守卫//////////
            $bossid=4;//世界boss-ID号
            $npcc=$bossid;
            $inina="boss_".$bossid.".ini";
            $path='acher/all_boss';
            $ininame = $path."/".$inina;
            _unlink($ininame); //删除文件
            include("./ini/boss_ini.php");

            ////////守卫//////////
            $bossid=5;//世界boss-ID号
            $npcc=$bossid;
            $inina="boss_".$bossid.".ini";
            $path='acher/all_boss';
            $ininame = $path."/".$inina;
            _unlink($ininame); //删除文件
            include("./ini/boss_ini.php");

            ////////守卫//////////
            $bossid=6;//世界boss-ID号
            $npcc=$bossid;
            $inina="boss_".$bossid.".ini";
            $path='acher/all_boss';
            $ininame = $path."/".$inina;
            _unlink($ininame); //删除文件
            include("./ini/boss_ini.php");

            //增加国战积分
            gz03_zj($bpid, 10);
            //增加玩家积分
            gz04_zj($wjid, 10);
            echo "<font color=black>获得国家积分+10</font>"."<br>";
            gz06($bpid, $bpmz);

            $xtxx="【国家权杖】被".$bpmz."国家的".$uname."夺走了,现在".$bpmz."国家变更为防守方";
            include("./msg/msgg02.php");
            echo "<font color=black>恭喜你！你的国家".$bpmz."获得了【国家权杖】现在变为防守方请好好守护权杖吧！</font>"."<br>";
            echo "<br>";
            echo "<br>";
            $cmid=$cmid+1;
            $cdid[]=$cmid;
            $clj[]=2;
            $npc[]=0;
            echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
        } else{
            echo "<font color=black>无间道么！你怎么可以夺取自己国家的【国家权杖】？</font>"."<br>";
            echo "<br>";
            $cmid=$cmid+1;
            $cdid[]=$cmid;
            $clj[]=2;
            $npc[]=0;
            echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
        }
    } else{
        echo "<font color=black>对不起！【国家权杖】已被".$zlgj."的".$czz."夺走了！！</font>"."<br>";
        echo "<br>";
        $cmid=$cmid+1;
        $cdid[]=$cmid;
        $clj[]=20;
        $npc[]=158;
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回国战入口</font></a>"."<br>";
    }
} else{
    echo "<font color=black>对不起！你还未加入国家！！</font>"."<br>";
    echo "<br>";
    $cmid=$cmid+1;
    $cdid[]=$cmid;
    $clj[]=2;
    $npc[]=0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
}

echo "<font color=black>----------------------</font>"."<br>";
//cmd及超链接值
include("fhgame.php");














?>