<?php

//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");

if($zsspd==1){
    $inina="zzck.ini";
    $path='ache/'.$wjid;
    $ininame = $path."/".$inina;
   _unlink($ininame); //删除文件

    //调用yl.ini是否存在
    include("./ini/yl_ini.php");

    //调用ckrl.ini是否存在
    //保存页面id方便分页取出
    if($cmdd==336){
        $inina="yl.ini";
        $path='ache/'.$wjid;
        $file = $path."/".$inina;
        $iniFile = new iniFile($file);
        $iniFile->updItem('背包页面', ['页面id' => $cmdd]);
    }

    //调用wp.ini是否存在
    include("./ini/zzck_ini.php");

    $inina="zzck.ini";
    $path='ache/'.$wjid;
    $ininame = $path."/".$inina;
    $iniFile = new iniFile($ininame);
    $iniFile->updItem('数量', ['初始' => 336]);

    $wpid=($iniFile->getCategory('id'));
    $wpmz=($iniFile->getCategory('名字'));
    $wpsl=($iniFile->getCategory('数量'));

    $m=count($wpid,0)-1;
    $i=0;
    $ym=$wpid['初始'];
    $km=0;
    if($m>=1){
        echo "<font color=red>尊敬的玩家你好！小轩西游充值或者奖励发放都在这里领取</font>"."<br>";
        foreach(array_keys($wpmz) as $key){
            $keywpmz[]=$wpmz[$key];
        }
        foreach(array_keys($wpsl) as $key){
            $keywpsl[]=$wpsl[$key];
        }
        foreach(array_keys($wpid) as $key){
            $keywpid[]=$wpid[$key];
        }
        for($d=0;$d<$m;$d++){
            $i=$i+1;
            $ivd=$keywpid[$i];
            $mvz=$keywpmz[$i];
            $svl=$keywpsl[$i];

            $mmz[]=$mvz;
            $ssl[]=$svl;
            $iid[]=$ivd;
            $km=$km+1;
            $mz[]=$mvz;
        }

        $i=-2;
        $mcc=$km/10;
        if($mcc>=$ym){
            for($x=0;$x<=9;$x++){
                $i=$i+1;
                $clname= $mz[$ym*10-9+$i];
                $cl=$ssl[$ym*10-9+$i];
                $xxid=$iid[$ym*10-9+$i];

                //cmd及超链接值
                $cmid=$cmid+1;
                $cdid[]=$cmid;
                $clj[]=337;
                $npc[]=$xxid;
                echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>$clname</font></a>"."<font color=blue>x$cl|</font>";
                //cmd及超链接值
                $cmid=$cmid+1;
                $cdid[]=$cmid;
                $clj[]=338;
                $npc[]=$xxid;
                echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>取出</font></a>"."<br>";
            }
        } else{
            if($ym>1){
                $mcc=$km%10-1;
                for($x=0;$x<=$mcc;$x++){
                    $i=$i+1;
                    $clname= $mz[$ym*10-9+$i];
                    $cl=$ssl[$ym*10-9+$i];
                    $xxid=$iid[$ym*10-9+$i];

                    //cmd及超链接值
                    $cmid=$cmid+1;
                    $cdid[]=$cmid;
                    $clj[]=337;
                    $npc[]=$xxid;
                    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>$clname</font></a>"."<font color=blue>x$cl|</font>";

                    //cmd及超链接值
                    $cmid=$cmid+1;
                    $cdid[]=$cmid;
                    $clj[]=338;
                    $npc[]=$xxid;
                    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>取出</font></a>"."<br>";
                }
            } else{
                $i=-2;
                for($x=0;$x<=$km-1;$x++){
                    $i=$i+1;
                    $clname= $mz[$ym*10-9+$i];
                    $cl=$ssl[$ym*10-9+$i];
                    $xxid=$iid[$ym*10-9+$i];

                    //cmd及超链接值
                    $cmid=$cmid+1;
                    $cdid[]=$cmid;
                    $clj[]=337;
                    $npc[]=$xxid;
                    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>$clname</font></a>"."<font color=blue>x$cl|</font>";

                    //cmd及超链接值
                    $cmid=$cmid+1;
                    $cdid[]=$cmid;
                    $clj[]=338;
                    $npc[]=$xxid;
                    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>取出</font></a>"."<br>";
                }
            }
        }
    } else {



        echo "<font color=black>增值仓库空空如也</font>"."<br>";

        //cmd及超链接值
        $cmid=$cmid+1;
        $cdid[]=$cmid;
        $clj[]=533;
        $npc[]=0;
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=red>立即充值</font></a>";
        echo "<br>";
    }
    echo "<br>";

    //cmd及超链接值
    $cmid=$cmid+1;
    $cdid[]=$cmid;
    $clj[]=1;
    $npc[]=0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br/>";
    echo "<br>";
    echo "----------------------"."<br>";

    //cmd及超链接值
    $cmid=$cmid+1;
    $cdid[]=$cmid;
    $clj[]=1;
    $npc[]=0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏首页</font></a>"."<br/>";
}

//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini
