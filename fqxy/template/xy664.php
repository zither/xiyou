<?php
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
    include("./ini/zz_ini.php");
    $zzdj_arr = $iniFile->getCategory('种植等级');
    $zzwpid_arr = $iniFile->getCategory('种植物品');
    $zztime_arr = $iniFile->getCategory('种植时间');
    $sftime_arr = $iniFile->getCategory('施肥时间');
    $shtime_arr = $iniFile->getCategory('收获时间');
    $zzwpmz_arr = $iniFile->getCategory('种植名字');
    $zzwpsl_arr = $iniFile->getCategory('种植数量');

    $zzid = array_key_first($zzdj_arr);

    $zzdj = $zzdj_arr[$zzid];
    $zzwpid = $zzwpid_arr[$zzid];
    $zztime = $zztime_arr[$zzid];
    $sftime = $sftime_arr[$zzid];
    $shtime = $shtime_arr[$zzid];
    $zzwpmz = $zzwpmz_arr[$zzid];
    $zzwpsl = $zzwpsl_arr[$zzid];

    $npcc=$zzwpid;
    include("./wp/wpxx.php");
    if($zzwpid>=1){
        $nowtime=date('Y-m-d H:i:s');
        if($sftime>$nowtime){
            if($nowtime>$shtime){
                $bz= rand(1, 10);
                if($bz==1){
                    $bz=5;
                } elseif($bz>=2&&$bz<=4){
                    $bz=4;
                } else{
                    $bz=3;
                }
                $wpslxx=$zzwpsl*$zzdj*$bz;
                $npcc=$zzwpid;
                include("./wp/wpxx.php");
                $npcc11=$npcc;//存值
                $pd=0;//初始
                $wpts="";//初始
                $wpdz1=[];//初始
                $wpdz2=[];//初始
                $wpdz3=[];//初始
                $wpdz4=[];//初始
                $wpdz5=[];//初始

                $wpdz1[]="〖紫星币〗";//名字
                $wpdz2[]=4;//物品分类
                $wpdz3[]=944;//物品id
                $wpdz4[]=20;//	需要扣除的量
                $wpdz5[]=1;//	重量

                include("./pz/ini_pzz026.php");
                $npcc=$npcc11;//返还存值

                if ($pd==2) {
                    $npcc=$zzwpid;
                    include("./wp/wpxx.php");
                    $manzu1="";
                    $kcrl=0;
                    $wpdz1=[];//初始
                    $wpdz2=[];//初始
                    $wpdz3=[];//初始
                    $wpdz4=[];//初始
                    $wpdz5=[];//初始

                    //物品加
                    $wpdz1[]=$wpmz;//名字
                    $wpdz2[]=$wpfl;//物品分类
                    $wpdz3[]=$zzwpid;//物品id
                    $wpdz4[]=$wpslxx;//	量
                    $wpdz5[]=$wpzl;//	重量
                    include("./rwmap/rwget.php");
                    echo "<font color=red>恭喜您！！使用〖紫星币〗意外收获到了".$wpmz."x".$wpslxx."（".$bz."倍）</font>"."<br>";
                    include("./ini/zt_ini.php");
                    $wjmz=($iniFile->getItem('玩家信息','玩家名字'));
                    $xtxx= "恭喜玩家".$wjmz."使用〖紫星币〗意外收获到了".$wpmz."x".$wpslxx."（".$bz."倍）";
                    include("./msg/msgg02.php");

                    $q2="zz";
                    $strsql = "delete from $q2 where id=$zzid";//物品id号必改值
                    $result = mysql_query($strsql);
                } else{
                    echo "<font color=black>对不起！！此类收割需要〖紫星币〗x20</font>"."<br>";
                }
            } else{
                echo "<font color=red>对不起！！您还没有种植产物，还未成熟（收获时间未到）</font>"."<br>";
            }
        } else{
            echo "<font color=red>对不起！！由于您未在施肥时间前来施肥作物已死亡（下次记得按时前来哦）</font>"."<br>";
            $q2="zz";
            $strsql = "delete from $q2 where id=$zzid";
            $result = mysql_query($strsql);
        }
    } else{
        echo "<font color=red>对不起！！您还没有种植产物，想不劳而获么？！</font>"."<br>";
    }

    $cmid=$cmid+1;
    $cdid[]=$cmid;
    $clj[]=658;
    $npc[]=0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回农场</font></a>"."<br>";
    echo "<br>";

    $cmid=$cmid+1;
    $cdid[]=$cmid;
    $clj[]=2;
    $npc[]=0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
    echo "<font color=black>----------------------</font>"."<br>";
    include("fhgame.php");
}

//解锁当前使用的ini
include("./ini/jsini.php");
