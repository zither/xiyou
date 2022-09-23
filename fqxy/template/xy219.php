<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
    echo "<font color=black>我的挂售</font></a>"."<br>";
    include("./ini/gsrl_ini.php");
    include("./ini/zt_ini.php");
    $gsrlb=($iniFile->getItem('玩家信息','挂售容量'));
    include("wp/gsrl.php");
    echo "<font color=black>挂售容量：".$gsbbrla."/".$gsrlb."</font></a>"."<br>";
    if($cmdd==219){
        include("./ini/yl_ini.php");
        $iniFile->updItem('背包页面', ['页面id' => $cmdd]);
    }
    include("./ini/gswp_ini.php");
    $wpid=($iniFile->getCategory('物品id'));
    $wpmz=($iniFile->getCategory('物品名字'));
    $wpsl=($iniFile->getCategory('物品数量'));
    $wpjg=($iniFile->getCategory('物品价格'));
    $m=count($wpid,0)-1;
    if($m>0){
        $i=0;
        $ym=$wpid['初始'];
        $km=0;
        foreach(array_keys($wpmz) as $key){
            $keywpmz[]=$wpmz[$key];
        }
        foreach(array_keys($wpsl) as $key){
            $keywpsl[]=$wpsl[$key];
        }
        foreach(array_keys($wpid) as $key){
            $keywpid[]=$wpid[$key];
        }

        foreach(array_keys($wpjg) as $key){
            $keywpjg[]=$wpjg[$key];
        }

        for($d=0;$d<$m;$d++){
            $i=$i+1;
            $ivd=$keywpid[$i];
            $mvz=$keywpmz[$i];
            $svl=$keywpsl[$i];
            $svljg=$keywpjg[$i];
            $mmz[]=$mvz;
            $ssl[]=$svl;
            $iid[]=$ivd;
            $km=$km+1;
            $mz[]=$mvz;
            $jjg[]=$svljg;
        }

        $i=-2;
        $mcc=$km/10;
        if($mcc>=$ym){
            for($x=0;$x<=9;$x++){
                $i=$i+1;
                $clname= $mz[$ym*10-9+$i];
                $cl=$ssl[$ym*10-9+$i];
                $xxid=$iid[$ym*10-9+$i];
                $wpjg=$jjg[$ym*10-9+$i];

                $cmid=$cmid+1;
                $cdid[]=$cmid;
                $clj[]=220;
                $npc[]=$xxid;
                echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$clname."</font></a>"."<font color=blue>x".$cl."（".$wpjg."两/个）|</font>";

                $cmid=$cmid+1;
                $cdid[]=$cmid;
                $clj[]=221;
                $npc[]=$xxid;
                echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>下架</font></a>"."<br>";
            }
        } else{
            if($ym>1){
                $mcc=$km%10-1;
                for($x=0;$x<=$mcc;$x++){
                    $i=$i+1;
                    $clname= $mz[$ym*10-9+$i];
                    $cl=$ssl[$ym*10-9+$i];
                    $xxid=$iid[$ym*10-9+$i];
                    $wpjg=$jjg[$ym*10-9+$i];

                    $cmid=$cmid+1;
                    $cdid[]=$cmid;
                    $clj[]=220;
                    $npc[]=$xxid;
                    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$clname."</font></a>"."<font color=blue>x".$cl."（".$wpjg."两/个）|</font>";

                    $cmid=$cmid+1;
                    $cdid[]=$cmid;
                    $clj[]=221;
                    $npc[]=$xxid;
                    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>下架</font></a>"."<br>";
                }
            } else{
                $i=-2;
                for($x=0;$x<=$km-1;$x++){
                    $i=$i+1;
                    $clname= $mz[$ym*10-9+$i];
                    $cl=$ssl[$ym*10-9+$i];
                    $xxid=$iid[$ym*10-9+$i];
                    $wpjg=$jjg[$ym*10-9+$i];

                    $cmid=$cmid+1;
                    $cdid[]=$cmid;
                    $clj[]=220;
                    $npc[]=$xxid;
                    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$clname."</font></a>"."<font color=blue>x".$cl."（".$wpjg."两/个）|</font>";

                    $cmid=$cmid+1;
                    $cdid[]=$cmid;
                    $clj[]=221;
                    $npc[]=$xxid;
                    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>下架</font></a>"."<br>";
                }
            }
        }

        $f=0;
        if($ym!=1){
            $cmid=$cmid+1;
            $cdid[]=$cmid;
            $clj[]=40;
            $npc[]=0;
            echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>首页</font></a>";
            echo  "<font color=blue>|</font></a>";
            $cmid=$cmid+1;
            $cdid[]=$cmid;
            $clj[]=39;
            $npc[]=0;
            echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>上页</font></a>";
            $f=1;
        }
        $mcc=$km/10;
        if($f>0&&$mcc>$ym){
            echo  "<font color=blue>|</font></a>";
        }
        $mcc=$km/10;
        if($mcc>$ym){
            $cmid=$cmid+1;
            $cdid[]=$cmid;
            $clj[]=38;
            $npc[]=0;
            echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>下页</font></a>";
            echo  "<font color=blue>|</font></a>";

            $cmid=$cmid+1;
            $cdid[]=$cmid;
            $clj[]=41;
            $npc[]=0;
            echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>末页</font></a>";
            $f=1;
        }

        if($f>0){
            echo "<br>";
        }
    } else{
        echo "<font color=black>暂时无任何挂售的物品</font></a>"."<br>";
    }
    echo "<br>";

    $cmid=$cmid+1;
    $cdid[]=$cmid;
    $clj[]=225;
    $npc[]=0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
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
