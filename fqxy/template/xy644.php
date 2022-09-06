<?php
//更新排行
include("./wj/bhmjxt.php");
include("./mb/bhxt0x99999.php");
$nowtime=date('Y-m-d');
if($mb!=$nowtime){
    include("./sql/mysql.php");//调用数据库连接
    $q2="all_hdph03";
    $strsql="truncate table $q2";
    $result=mysql_query($strsql);
    $inina="phb15.ini";
    $path='acher/phb';
    $ininame = $path."/".$inina;
    _unlink($ininame); //删除文件

    $file01="./mb/bhxt0x99999.php";
    $nowtime=date('Y-m-d');
    $zlmb='$mb';
    file_put_contents($file01,"<?php
$zlmb='".$nowtime."';
?>");
}

$zspd=0;
$zsspd=0;
$ininalock="phb15";
$path='acher/phb';
$gglockname=$path."/".$ininalock;
if (!file_exists($gglockname)) {
    touch($gglockname);
}
for($x=0;$x<=30;$x++){
    $fp = fopen($gglockname, "w+");
    if(flock($fp,LOCK_EX | LOCK_NB)){
        $zsspd=1;
        //flock($fp,LOCK_EX);
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
    include("./ini/phb15_ini.php");
    $phbzz2=($iniFile->getCategory('排行榜值2'));
    $phbzz4=($iniFile->getCategory('排行榜值4'));
    $hm=0;
    $ik=0;
    $hm=count($phbzz2,0);
    $nowtime=date('Y-m-d');
    echo "<font color=black>【采花大盗】花朵积分排名（".$nowtime."）</font></a>"."<br>";
    if($hm>=1){
        foreach(array_keys($phbzz2) as $key){
            $keyphbzz2[]=$phbzz2[$key];
        }
        foreach(array_keys($phbzz4) as $key){
            $keyphbzz4[]=$phbzz4[$key];
        }
        $mt=0;
        for($b=0;$b<$hm;$b++){
            $xb[]=$keyphbzz2[$mt]*10000+$keyphbzz4[$mt];
            $fb[]=$keyphbzz2[$mt]*10000;
            $mt=$mt+1;
        }
        if ($hm>0){
            rsort($fb);
            rsort($xb);

        }
        $mt=0;
        for($b=0;$b<$hm;$b++){

            $xbb[]=$xb[$mt]-$fb[$mt];
            $mt=$mt+1;
        }
        $mm=0;
        $i=-1;
        for($b=0;$b<$hm;$b++){
            $i=$i+1;
            $xbbb=$xbb[$i];

            $phmz[]=($iniFile->getItem('排行榜名字',$xbbb));
            $phidd[]=($iniFile->getItem('排行榜值1',$xbbb));
            $phsx[]=($iniFile->getItem('排行榜值2',$xbbb));
            $vvip[]=($iniFile->getItem('排行榜值3',$xbbb));

        }

        $i=-1;
        for($d=0;$d<$hm-1;$d++){
            $i=$i+1;
            $ik=$ik+1;
            echo "<font color=black>".$ik.".</font>";
            $img='pic/vip/'."vip".$vvip[$i].'.png';
            echo '<img src="'.$img.' "alt="图片"/〉';
            echo "<br>";
            if ($wjid==$phidd[$i]){
                $cmid=$cmid+1;
                $cdid[]=$cmid;
                $clj[]=93;
                $npc[]=$phidd[$i];
                echo "<font color=red>".$phmz[$i]."</font></a>";
                echo "<font color=red>&nbsp&nbsp&nbsp[".$phsx[$i]."]</font>";
            } else{
                $cmid=$cmid+1;
                $cdid[]=$cmid;
                $clj[]=93;
                $npc[]=$phidd[$i];
                echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$phmz[$i]."</font></a>";
                echo "<font color=black>&nbsp&nbsp&nbsp[".$phsx[$i]."]</font>";
            }
            echo "</br>";
            if ($ik>=10){
                break;
            }
        }
    } else{
        echo "<font color=black>目前还无人上榜</font>"."<br>";
    }
    echo "</br>";
    $cmid=$cmid+1;
    $cdid[]=$cmid;
    $clj[]=2;
    $npc[]=0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
    echo "----------------------"."<br>";
    include("fhgame.php");

    flock($fp,LOCK_UN);
} else{
    echo "服务器开小差了";
}