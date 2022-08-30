<?php

$zspd=0;
$zsspd=0;
$ininalock="phb5";
$path='acher/phb';
$gglockname=$path."/".$ininalock;

for($x=0;$x<=30;$x++){
    $fp = fopen($gglockname, "w+");
    if(flock($fp,LOCK_EX | LOCK_NB)){
        $zsspd=1;
        break;
    }else{
        usleep(200000);
        $zspd=$zspd+1;//五秒内没获得锁则提示服务器繁忙
        if($zspd>=25){
            $zsspd=2;
            break;
        }
    }
}

if($zsspd==1){
    include("./ini/phb5_ini.php");
    $phbzz2=($iniFile->getCategory('排行榜值2'));
    $phbzz4=($iniFile->getCategory('排行榜值4'));
    $hm=count($phbzz2);
    echo "<font color=black>【全区等级排名前10名玩家】</font></a>"."<br>";
    if($hm >= 1){
        $fb = $xb = [];
        foreach(array_keys($phbzz2) as $key){
            $keyphbzz2[]=$phbzz2[$key];
        }
        foreach(array_keys($phbzz4) as $key){
            $keyphbzz4[]=$phbzz4[$key];
        }
        for($b = 0; $b < $hm; $b++){
            $xb[]=$keyphbzz2[$b]*10000+$keyphbzz4[$b];
            $fb[]=$keyphbzz2[$b]*10000;
        }
        if ($hm > 0){
            rsort($fb);
            rsort($xb);
        }
        for($b=0;$b<$hm;$b++){
            $xbb[]=$xb[$b]-$fb[$b];
        }
        for($b=0; $b<$hm; $b++){
            $xbbb=$xbb[$b];
            $phmz[]=($iniFile->getItem('排行榜名字',$xbbb));
            $phidd[]=($iniFile->getItem('排行榜值1',$xbbb));
            $phsx[]=($iniFile->getItem('排行榜值2',$xbbb));
            $vvip[]=($iniFile->getItem('排行榜值3',$xbbb));
        }

        for($d=0, $ik = 1; $d < $hm-1; $d++, $ik++){
            echo "<font color=black>".$ik.".</font>";
            $img='pic/vip/'."vip".$vvip[$d].'.png';
            echo '<img src="'.$img.' "alt="图片"/〉';
            echo "<br>";

            //cmd及超链接值
            $cmid=$cmid+1;
            $cdid[]=$cmid;
            $clj[]=93;
            $npc[]=$phidd[$d];

            if ($wjid==$phidd[$d]){
                echo "<font color=red>".$phmz[$d]."</font></a>";
                echo "<font color=red>&nbsp&nbsp&nbsp[".$phsx[$d]."]</font>";
            } else{
                echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$phmz[$d]."</font></a>";
                if($phsx[$d]>=201){
                    $phdj=$phsx[$d]-200;
                    $phdj="仙（".$phdj."级）";
                } else{
                    $phdj=$phsx[$d]."级";
                }
                echo "<font color=black>&nbsp&nbsp&nbsp[".$phdj."]</font>";
            }
            echo $phidd[$d];
            echo "</br>";
            if ($ik >= 10){
                break;
            }
        }
    } else{
        echo "<font color=black>目前等级榜还无人上榜</font>"."<br>";
    }
    echo "</br>";

    $cmid=$cmid+1;
    $cdid[]=$cmid;
    $clj[]=57;
    $npc[]=0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回排行</font></a>"."<br>";

    $cmid=$cmid+1;
    $cdid[]=$cmid;
    $clj[]=2;
    $npc[]=0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";

    echo "----------------------"."<br>";
    include("fhgame.php");
    flock($fp,LOCK_UN);
} else{
    echo "fm";
}
