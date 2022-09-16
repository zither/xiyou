<?php

//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
    $hdid=3;
    $npcc=$hdid;
    include("./ini/hd_ini.php");
    $hdcs=($iniFile->getItem('活动次数',$hdid));
    $csts=$hdcs+1;
    echo "<font color=black>恭喜你！！领取到了第".$csts."份【神秘礼物】</font>"."<br>";
    if($hdcs ==0){
        $bz= rand(1, 10);//随机
        if($bz ==1){
            //银两加
            $yl1=100000;
            $wwpsl=$yl1;
            include("./pz/ini_pz03.php");
            //经验加
            $jy=100000;
            include("./pz/ini_pzz023.php");
        } elseif ($bz==2) {
            //银两加
            $yl1=50000;
            $wwpsl=$yl1;
            include("./pz/ini_pz03.php");
            //经验加
            $jy=50000;
            include("./pz/ini_pzz023.php");
        } elseif ($bz==3) {
            //银两加
            $yl1=20000;
            $wwpsl=$yl1;
            include("./pz/ini_pz03.php");
            $jy=20000;
            include("./pz/ini_pzz023.php");
        } elseif ($bz>=4&&$bz<=10) {
            $yl1=8888;
            $wwpsl=$yl1;
            include("./pz/ini_pz03.php");
            $jy=8888;
            include("./pz/ini_pzz023.php");
        }
    } elseif ($hdcs==1) {
        $bz= rand(1, 100);
        if($bz >=1&&$bz <=10){
            $wpdz1[]="〖打孔器〗";//名字
            $wpdz2[]=2;//物品分类
            $wpdz3[]=302;//物品id
            $wpdz4[]=1;//	量
            $wpdz5[]=1;//	重量
        } elseif($bz >=11&&$bz <=20){
            $wpdz1[]="〖小智慧果〗";//名字
            $wpdz2[]=4;//物品分类
            $wpdz3[]=398;//物品id
            $wpdz4[]=1;//	量
            $wpdz5[]=1;//	重量
        } elseif($bz >=21&&$bz <=50){
            $wpdz1[]="〖铁魂〗";//名字
            $wpdz2[]=2;//物品分类
            $wpdz3[]=308;//物品id
            $wpdz4[]=1;//	量
            $wpdz5[]=1;//	重量
        } elseif($bz >=51&&$bz <=80){
            $wpdz1[]="〖铁魂〗";//名字
            $wpdz2[]=2;//物品分类
            $wpdz3[]=308;//物品id
            $wpdz4[]=5;//	量
            $wpdz5[]=1;//	重量
        } else{
            $wpdz1[]="〖铁魂〗";//名字
            $wpdz2[]=2;//物品分类
            $wpdz3[]=308;//物品id
            $wpdz4[]=1;//	量
            $wpdz5[]=1;//	重量
        }
        include("./rwmap/rwget.php");
    } elseif ($hdcs==2) {
        $bz= rand(1, 100);
        if($bz >=1&&$bz <=10){
            $wpdz1[]="小幸运草";//名字
            $wpdz2[]=4;//物品分类
            $wpdz3[]=126;//物品id
            $wpdz4[]=1;//	量
            $wpdz5[]=1;//	重量
        } elseif($bz >=11&&$bz <=20){
            $wpdz1[]="大幸运草";//名字
            $wpdz2[]=4;//物品分类
            $wpdz3[]=307;//物品id
            $wpdz4[]=1;//	量
            $wpdz5[]=1;//	重量
        } elseif($bz >=21&&$bz <=50){
            $wpdz1[]="〖铜魂〗";//名字
            $wpdz2[]=2;//物品分类
            $wpdz3[]=309;//物品id
            $wpdz4[]=2;//	量
            $wpdz5[]=1;//	重量
        } elseif($bz >=51&&$bz <=80){
            $wpdz1[]="〖铜魂〗";//名字
            $wpdz2[]=2;//物品分类
            $wpdz3[]=309;//物品id
            $wpdz4[]=5;//	量
            $wpdz5[]=1;//	重量
        } else{
            $npcc=309;
            $wpdz1[]="〖铜魂〗";//名字
            $wpdz2[]=2;//物品分类
            $wpdz3[]=309;//物品id
            $wpdz4[]=1;//	量
            $wpdz5[]=1;//	重量
        }

        include("./rwmap/rwget.php");
    } elseif ($hdcs==3) {
        $bz= rand(1, 100);
        if($bz >=1&&$bz <=10){
            $wpdz1[]="〖大智慧果〗";//名字
            $wpdz2[]=4;//物品分类
            $wpdz3[]=399;//物品id
            $wpdz4[]=1;//	量
            $wpdz5[]=1;//	重量
        } elseif($bz >=11&&$bz <=20){
            $wpdz1[]="【蟠桃】";//名字
            $wpdz2[]=5;//物品分类
            $wpdz3[]=237;//物品id
            $wpdz4[]=3;//	量
            $wpdz5[]=1;//	重量
        } elseif($bz >=21&&$bz <=50){
            $wpdz1[]="【蟠桃】";//名字
            $wpdz2[]=5;//物品分类
            $wpdz3[]=237;//物品id
            $wpdz4[]=1;//	量
            $wpdz5[]=1;//	重量
        } elseif($bz >=51&&$bz <=80){
            $wpdz1[]="云南白药（超大捆）";//名字
            $wpdz2[]=5;//物品分类
            $wpdz3[]=250;//物品id
            $wpdz4[]=5;//	量
            $wpdz5[]=1;//	重量
            echo "<font color=black> 恭喜你，获得云南白药(超大捆)x".$sl."</font>"."<br>";
        } else{
            $wpdz1[]="〖百年魔珠〗";//名字
            $wpdz2[]=2;//物品分类
            $wpdz3[]=331;//物品id
            $wpdz4[]=5;//	量
            $wpdz5[]=1;//	重量
        }

        include("./rwmap/rwget.php");
    } elseif ($hdcs==4) {
        $bz= rand(1, 100);
        if($bz >=1&&$bz <=10){
            $wpdz1[]="【VIP练级卷】";//名字
            $wpdz2[]=1;//物品分类
            $wpdz3[]=5;//物品id
            $wpdz4[]=1;//	量
            $wpdz5[]=1;//	重量
        } elseif($bz >=11&&$bz <=20){
            $wpdz1[]="【VIP练级卷】";//名字
            $wpdz2[]=1;//物品分类
            $wpdz3[]=5;//物品id
            $wpdz4[]=15;//	量
            $wpdz5[]=1;//	重量
        } elseif($bz >=21&&$bz <=50){
            $wpdz1[]="〖银魂〗";//名字
            $wpdz2[]=2;//物品分类
            $wpdz3[]=310;//物品id
            $wpdz4[]=2;//	量
            $wpdz5[]=1;//	重量
        } elseif($bz >=51&&$bz <=80){
            $wpdz1[]="〖银魂〗";//名字
            $wpdz2[]=2;//物品分类
            $wpdz3[]=310;//物品id
            $wpdz4[]=5;//	量
            $wpdz5[]=1;//	重量
        } else{
            $wpdz1[]="〖银魂〗";//名字
            $wpdz2[]=2;//物品分类
            $wpdz3[]=310;//物品id
            $wpdz4[]=2;//	量
            $wpdz5[]=1;//	重量
        }
        include("./rwmap/rwget.php");
    } elseif ($hdcs==5) {
        $bz= rand(1, 100);
        if($bz >=1&&$bz <=10){
            $wpdz1[]="〖金豆〗";//名字
            $wpdz2[]=4;//物品分类
            $wpdz3[]=127;//物品id
            $wpdz4[]=1;//	量
            $wpdz5[]=1;//	重量
        } elseif($bz >=11&&$bz <=20){
            $wpdz1[]="〖金豆〗";//名字
            $wpdz2[]=4;//物品分类
            $wpdz3[]=127;//物品id
            $wpdz4[]=2;//	量
            $wpdz5[]=1;//	重量
        } elseif($bz >=21&&$bz <=50){
            $wpdz1[]="〖金魂〗";//名字
            $wpdz2[]=2;//物品分类
            $wpdz3[]=311;//物品id
            $wpdz4[]=2;//	量
            $wpdz5[]=1;//	重量
        } elseif($bz >=51&&$bz <=80){
            $wpdz1[]="〖金魂〗";//名字
            $wpdz2[]=2;//物品分类
            $wpdz3[]=311;//物品id
            $wpdz4[]=5;//	量
            $wpdz5[]=1;//	重量
        } else{
            $wpdz1[]="〖金魂〗";//名字
            $wpdz2[]=2;//物品分类
            $wpdz3[]=311;//物品id
            $wpdz4[]=2;//	量
            $wpdz5[]=1;//	重量
        }
        include("./rwmap/rwget.php");
    } elseif ($hdcs==6) {
        $bz= rand(1, 100);
        if($bz >=1&&$bz <=10){
            $wpdz1[]="〖铁星升星符〗";//名字
            $wpdz2[]=4;//物品分类
            $wpdz3[]=314;//物品id
            $wpdz4[]=1;//	量
            $wpdz5[]=1;//	重量
        } elseif($bz >=11&&$bz <=20){
            $wpdz1[]="〖铁星升星符〗";//名字
            $wpdz2[]=4;//物品分类
            $wpdz3[]=314;//物品id
            $wpdz4[]=2;//	量
            $wpdz5[]=1;//	重量
        } elseif($bz >=21&&$bz <=50){
            $wpdz1[]="【三千年蟠桃】";//名字
            $wpdz2[]=5;//物品分类
            $wpdz3[]=238;//物品id
            $wpdz4[]=1;//	量
            $wpdz5[]=1;//	重量
        } elseif($bz >=51&&$bz <=80){
            $wpdz1[]="【三千年蟠桃】";//名字
            $wpdz2[]=5;//物品分类
            $wpdz3[]=238;//物品id
            $wpdz4[]=5;//	量
            $wpdz5[]=1;//	重量
        } else{
            $wpdz1[]="【三千年蟠桃】";//名字
            $wpdz2[]=5;//物品分类
            $wpdz3[]=238;//物品id
            $wpdz4[]=1;//	量
            $wpdz5[]=1;//	重量
        }
        include("./rwmap/rwget.php");
    } elseif ($hdcs==7) {
        $bz= rand(1, 100);
        if($bz >=1&&$bz <=10){
            $wpdz1[]="〖铜星升星符〗";//名字
            $wpdz2[]=4;//物品分类
            $wpdz3[]=315;//物品id
            $wpdz4[]=1;//	量
            $wpdz5[]=1;//	重量
        } elseif($bz >=11&&$bz <=20){
            $wpdz1[]="〖铜星升星符〗";//名字
            $wpdz2[]=4;//物品分类
            $wpdz3[]=315;//物品id
            $wpdz4[]=2;//	量
            $wpdz5[]=1;//	重量
        } elseif($bz >=21&&$bz <=50){
            $wpdz1[]="【六千年蟠桃】";//名字
            $wpdz2[]=5;//物品分类
            $wpdz3[]=239;//物品id
            $wpdz4[]=1;//	量
            $wpdz5[]=1;//	重量
        } elseif($bz >=51&&$bz <=80){
            $wpdz1[]="【六千年蟠桃】";//名字
            $wpdz2[]=5;//物品分类
            $wpdz3[]=239;//物品id
            $wpdz4[]=5;//	量
            $wpdz5[]=1;//	重量
        } else{
            $wpdz1[]="【六千年蟠桃】";//名字
            $wpdz2[]=5;//物品分类
            $wpdz3[]=239;//物品id
            $wpdz4[]=1;//	量
            $wpdz5[]=1;//	重量
        }
        include("./rwmap/rwget.php");
    } elseif ($hdcs==8) {
        $bz= rand(1, 100);
        if($bz >=1&&$bz <=10){
            $wpdz1[]="〖金豆〗";//名字
            $wpdz2[]=4;//物品分类
            $wpdz3[]=127;//物品id
            $wpdz4[]=1;//	量
            $wpdz5[]=1;//	重量
        } elseif($bz >=11&&$bz <=20){
            $wpdz1[]="〖高级打孔器〗";//名字
            $wpdz2[]=2;//物品分类
            $wpdz3[]=304;//物品id
            $wpdz4[]=2;//	量
            $wpdz5[]=1;//	重量
        } elseif($bz >=21&&$bz <=50){
            $wpdz1[]="〖银魂〗";//名字
            $wpdz2[]=2;//物品分类
            $wpdz3[]=310;//物品id
            $wpdz4[]=2;//	量
            $wpdz5[]=1;//	重量
        } elseif($bz >=51&&$bz <=80){
            $wpdz1[]="〖银魂〗";//名字
            $wpdz2[]=2;//物品分类
            $wpdz3[]=310;//物品id
            $wpdz4[]=5;//	量
            $wpdz5[]=1;//	重量
        } else{
            $wpdz1[]="〖银魂〗";//名字
            $wpdz2[]=2;//物品分类
            $wpdz3[]=310;//物品id
            $wpdz4[]=2;//	量
            $wpdz5[]=1;//	重量
        }
        include("./rwmap/rwget.php");
    } elseif ($hdcs==9) {
        $bz= rand(1, 100);
        if($bz >=1&&$bz <=10){
            $wpdz1[]="〖金豆〗";//名字
            $wpdz2[]=4;//物品分类
            $wpdz3[]=127;//物品id
            $wpdz4[]=1;//	量
            $wpdz5[]=1;//	重量
        } elseif($bz >=11&&$bz <=20){
            $wpdz1[]="〖金豆〗";//名字
            $wpdz2[]=4;//物品分类
            $wpdz3[]=127;//物品id
            $wpdz4[]=2;//	量
            $wpdz5[]=1;//	重量
        } elseif($bz >=21&&$bz <=50){
            $wpdz1[]="〖金魂〗";//名字
            $wpdz2[]=2;//物品分类
            $wpdz3[]=311;//物品id
            $wpdz4[]=2;//	量
            $wpdz5[]=10;//	重量
        } elseif($bz >=51&&$bz <=80){
            $wpdz1[]="〖金魂〗";//名字
            $wpdz2[]=2;//物品分类
            $wpdz3[]=311;//物品id
            $wpdz4[]=5;//	量
            $wpdz5[]=15;//	重量
        } else{
            $wpdz1[]="〖金魂〗";//名字
            $wpdz2[]=2;//物品分类
            $wpdz3[]=311;//物品id
            $wpdz4[]=2;//	量
            $wpdz5[]=20;//	重量
        }
        include("./rwmap/rwget.php");
    }

    $hdcs=$hdcs+1;
    $nowtime=date('Y-m-d H:i:s');
    $q2="hd";
    $strsql = "update $q2 set hdtime='$nowtime',hdcs=$hdcs where wjid=$wjid and hdid=$hdid";//物品id号必改值
    $result = mysql_query($strsql);
    include("./ini/hd_ini.php");
    $iniFile->updItem('活动时间', [$hdid => $nowtime]);
    $iniFile->updItem('活动次数', [$hdid => $hdcs]);

    $cmid = $cmid+1;
    $cdid[] = $cmid;
    $clj[] = 307;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&cmd=$cmid&sid=$a1'>返回每日福利</a><br>";
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