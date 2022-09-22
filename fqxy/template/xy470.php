<?php

//阻塞代码防止出现脏数据
$ininalock="jdjc.txt";
$zspd=0;
$zsspd=0;
//路径
$path='acher/hdjc';
$gglockname=$path."/".$ininalock;
for($x=0;$x<=30;$x++){
    $fp = fopen($gglockname, "w+");
    if(flock($fp,LOCK_EX | LOCK_NB)){
        $zsspd=1;
        break;
    }else{
        //排队等待
        //延时200毫秒
        usleep(200000);
        $zspd=$zspd+1;//五秒内没获得锁则提示服务器繁忙
        if($zspd>=25){
            $zsspd=2;
            break;
        }
    }
}

if($zsspd==1){
//左手
    $arr = explode("_",$npcc);
    $npcc=$arr[0];
    $npccid=$arr[1];
    include("./ini/jdjc_ini.php");
    $qc01=($iniFile->getItem('排行榜名字',$npcc));//玩家名字
    $qc02=($iniFile->getItem('排行榜值1',$npcc));//玩家id
    $qc03=($iniFile->getItem('排行榜值2',$npcc));//玩家投注
    $qc04=($iniFile->getItem('排行榜值5',$npcc));//值
    $qc05=($iniFile->getItem('排行榜值4',$npcc));//玩家编号
    $qc06=($iniFile->getItem('排行榜值6',$npcc));//时间搓
    if($qc04==1&&$qc05>=1&&$qc06==$npccid&&$qc06!=""&&$npccid!=""||$qc04==2&&$qc05>=1&&$qc06==$npccid&&$qc06!=""&&$npccid!=""){
        echo "<font color=black>恭喜你！撤销了此条记录〖金豆〗x".$qc03."（请到小仓提取）</font></a>"."<br>";
        //赢取奖励
        include("./ini/ylck_ini.php");
        $q2="all_ylck";
        $sql1=mysql_query("select wjid,yl02 from $q2 where wjid=$wjid");
        $info1=@mysql_fetch_array($sql1);
        $wjidpd=$info1['wjid'];
        $yl02=$info1['yl02'];
        $xcyl=$yl02+$qc03;
        if($wjidpd>10000000){
            $strsql = "update $q2 set yl02=$xcyl where wjid=$wjid";//物品id号必改值
            $result = mysql_query($strsql);
        } else{
            $sql1 = "insert into $q2 (wjid,yl01,yl02,yl03)  values('$wjid','0','$xcyl','0')";
            if (!mysql_query($sql1)) {
                die('Error: ' . mysql_error());
            }
        }

        //更新缓存数据
        $inina="ylck.ini";
        $path='ache/'.$wjid;
        $ininame = $path."/".$inina;
        _unlink($ininame); //删除文件

        $q2="all_jdjc";
        $strsql = "delete from $q2 where id=$qc05 ";//物品id号必改值
        $result = mysql_query($strsql);
    } else{
        echo "<font color=black>对不起！！已被其他玩家吹走了</font></a>"."<br>";
    }
    echo "</br>";
    //cmd及超链接值
    $cmid=$cmid+1;
    $cdid[]=$cmid;
    $clj[]=467;
    $npc[]=0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回泡泡</font></a>"."<font color=black></font>"."<br>";

    flock($fp,LOCK_UN);
} else{
    echo "服务器开小差了";
}

