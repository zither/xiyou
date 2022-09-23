<?php

if($sll!=0){
    if($wpsl>=$sl){
        include("./wp/wpxx.php");
        include("./ini/zt_ini.php");
        include("./ini/bbrl_ini.php");

        $inina="zt.ini";
        $path='ache/'.$wjid;
        $ininame = $path."/".$inina;
        $iniFile = new iniFile($ininame);
        $wjxx=($iniFile->getItem('玩家信息',['背包容量','挂售容量']));
        $bbrlb=$wjxx['背包容量'];
        $cbbrlb=$wjxx['挂售容量'];

        $inina="bbrl.ini";
        $path='ache/'.$wjid;
        $ininame = $path."/".$inina;
        $iniFile = new iniFile($ininame);
        $ckbbrla=($iniFile->getItem('背包已用容量','容量'));
        $rl=$wpzl*$sl;
        $wprl=$ckbbrla+$rl;
        if($wprl<=$bbrlb){
            if($wpsl<$sl){
                $dqwp=0;
                echo "<font color=red>输入有误请重新输入</font>"."<br>";
                echo "<br>";
            } elseif($wpsl>$sl&&$sl!=0){
                $wpsl=$wpsl-$sl;
                $arr = explode("_",$npcc);
                $npcc1=$arr[0];
                $npcc2=$arr[1];
                //背包减
                $q2="gswp";
                $strsql = "update $q2 set wpsl=$wpsl where wjid=$wjid and id=$npcc2";//物品id号必改值
                $result = mysql_query($strsql);

                $q2="wp";
                $sql1=mysql_query("select * from $q2 where wjid=$wjid and wpid=$npcc1");
                $info1=@mysql_fetch_array($sql1);
                $ckwpid=$info1['wpid'];
                $ckwpsl=$info1['wpsl'];
                if($ckwpid==""){
                    $ckwpsl=$ckwpsl+$sl;
                    include("./wp/wpxx.php");
                    $q2="wp";
                    $sql = "insert into $q2 (wjid,wpid,wpsl,wpfl)  values('$wjid','$npcc1','$ckwpsl','$wpfl')";
                    if (!mysql_query($sql)){
                        die('Error: ' . mysql_error());
                    }
                } else{
                    $q2="wp";
                    $ckwpsl=$ckwpsl+$sl;
                    $strsql = "update $q2 set wpsl=$ckwpsl where wjid=$wjid and wpid=$ckwpid";//物品id号必改值
                    $result = mysql_query($strsql);
                }

                include("./ini/gswp_ini.php");
                $iniFile->updItem('物品数量', [$npcc => $wpsl]);
                if($wpfl==1){
                    $inina="wp.ini";
                    $path='ache/'.$wjid;
                    $ininame = $path."/".$inina;
                    _unlink($ininame); //删除文件
                } elseif($wpfl==2){ //背包材料
                    $inina="cl.ini";
                    $path='ache/'.$wjid;
                    $ininame = $path."/".$inina;
                    _unlink($ininame); //删除文件
                } elseif($wpfl==4){ //背包商城
                    $inina="sc.ini";
                    $path='ache/'.$wjid;
                    $ininame = $path."/".$inina;
                    _unlink($ininame); //删除文件
                } elseif($wpfl==5){ //背包丹药
                    $inina="dy.ini";
                    $path='ache/'.$wjid;
                    $ininame = $path."/".$inina;
                    _unlink($ininame); //删除文件
                } elseif($wpfl==6){ //背包任务
                    $inina="rw.ini";
                    $path='ache/'.$wjid;
                    $ininame = $path."/".$inina;
                    _unlink($ininame); //删除文件
                } elseif($wpfl==7){ //背包农场
                    $inina="nc.ini";
                    $path='ache/'.$wjid;
                    $ininame = $path."/".$inina;
                    _unlink($ininame); //删除文件
                } elseif($wpfl==8){ //背包宝箱
                    $inina="bx.ini";
                    $path='ache/'.$wjid;
                    $ininame = $path."/".$inina;
                    _unlink($ininame); //删除文件
                } elseif($wpfl==9){ //背包其他
                    $inina="qt.ini";
                    $path='ache/'.$wjid;
                    $ininame = $path."/".$inina;
                    _unlink($ininame); //删除文件
                }

                include("./wp/wpxx.php");
                $inina="gsrl.ini";
                $path='ache/'.$wjid;
                $ininame = $path."/".$inina;
                $iniFile = new iniFile($ininame);
                $bbrla=($iniFile->getItem('挂售已用容量','容量'));
                $rl=$wpzl*$sl;
                $wprl=$bbrla-$rl;
                $iniFile->updItem('挂售已用容量', ['容量' => $wprl]);

                $inina="bbrl.ini";
                $path='ache/'.$wjid;
                $ininame = $path."/".$inina;
                $iniFile = new iniFile($ininame);
                $ckbbrla=($iniFile->getItem('背包已用容量','容量'));
                $rl=$wpzl*$sl;
                $wprl=$ckbbrla+$rl;
                $iniFile->updItem('背包已用容量', ['容量' => $wprl]);

                echo "<font color=red>你下架了".$wpmz."x".$sl."</font>"."<br>";
                include("template/xy219.php");
                include("./pz/pz01.php");
            } elseif($wpsl==$sl){
                $wpsl=$wpsl-$sl;
                $arr = explode("_",$npcc);
                $npcc1=$arr[0];
                $npcc2=$arr[1];
                $q2="gswp";
                $strsql = "delete from $q2 where wjid=$wjid and id='$npcc2' ";//物品id号必改值
                $result = mysql_query($strsql);

                $q2="wp";
                $sql1=mysql_query("select * from $q2 where wjid=$wjid and wpid='$npcc1'",$conn);
                $info1=@mysql_fetch_array($sql1);
                $ckwpid=$info1['wpid'];
                $ckwpsl=$info1['wpsl'];
                if($ckwpid==""){
                    $ckwpsl=$ckwpsl+$sl;
                    include("./wp/wpxx.php");
                    $q2="wp";
                    $sql = "insert into $q2 (wjid,wpid,wpsl,wpfl)  values('$wjid','$npcc1','$ckwpsl','$wpfl')";
                    if (!mysql_query($sql)){
                        die('Error: ' . mysql_error());
                    }
                } else{
                    $q2="wp";
                    $ckwpsl=$ckwpsl+$sl;
                    $strsql = "update $q2 set wpsl=$ckwpsl where wjid=$wjid and wpid=$ckwpid";//物品id号必改值
                    $result = mysql_query($strsql);
                }

                include("./ini/gswp_ini.php");
                $iniFile->delItem('物品id', $npcc);
                $iniFile->delItem('序列', $npcc);
                $iniFile->delItem('物品数量', $npcc);
                $iniFile->delItem('物品名字', $npcc);
                $iniFile->delItem('物品价格', $npcc);
                if($wpfl==1){//背包书卷
                    $inina="wp.ini";
                    $path='ache/'.$wjid;
                    $ininame = $path."/".$inina;
                    _unlink($ininame); //删除文件
                } elseif($wpfl==2){ //背包材料
                    $inina="cl.ini";
                    $path='ache/'.$wjid;
                    $ininame = $path."/".$inina;
                    _unlink($ininame); //删除文件
                } elseif($wpfl==4){ //背包商城
                    $inina="sc.ini";
                    $path='ache/'.$wjid;
                    $ininame = $path."/".$inina;
                    _unlink($ininame); //删除文件
                } elseif($wpfl==5){ //背包丹药
                    $inina="dy.ini";
                    $path='ache/'.$wjid;
                    $ininame = $path."/".$inina;
                    _unlink($ininame); //删除文件
                } elseif($wpfl==6){ //背包任务
                    $inina="rw.ini";
                    $path='ache/'.$wjid;
                    $ininame = $path."/".$inina;
                    _unlink($ininame); //删除文件
                } elseif($wpfl==7){ //背包农场
                    $inina="nc.ini";
                    $path='ache/'.$wjid;
                    $ininame = $path."/".$inina;
                    _unlink($ininame); //删除文件
                } elseif($wpfl==8){ //背包宝箱
                    $inina="bx.ini";
                    $path='ache/'.$wjid;
                    $ininame = $path."/".$inina;
                    _unlink($ininame); //删除文件
                } elseif($wpfl==9){ //背包其他
                    $inina="qt.ini";
                    $path='ache/'.$wjid;
                    $ininame = $path."/".$inina;
                    _unlink($ininame); //删除文件
                }

                include("./wp/wpxx.php");
                $inina="gsrl.ini";
                $path='ache/'.$wjid;
                $ininame = $path."/".$inina;
                $iniFile = new iniFile($ininame);
                $bbrla=($iniFile->getItem('挂售已用容量','容量'));
                $rl=$wpzl*$sl;
                $wprl=$bbrla-$rl;
                $iniFile->updItem('挂售已用容量', ['容量' => $wprl]);

                $inina="bbrl.ini";
                $path='ache/'.$wjid;
                $ininame = $path."/".$inina;
                $iniFile = new iniFile($ininame);
                $ckbbrla=($iniFile->getItem('背包已用容量','容量'));
                $rl=$wpzl*$sl;
                $wprl=$ckbbrla+$rl;
                $iniFile->updItem('背包已用容量', ['容量' => $wprl]);

                echo "<font color=red>你下架了".$wpmz."x".$sl."</font>"."<br>";
                if($sl>1){
                    include("template/xy219.php");
                    include("./pz/pz01.php");
                }
            } else {
                $dqwp=0;
                echo "<font color=red>输入有误请重新输入</font>"."<br>";
                echo "<br>";
            }
        } else{
            $dqwp=0;
            //$qbwp=1;
            echo "<font color=red>对不起，你的背包已放不下任何东西了</font>"."<br>";
            echo "<br>";
        }
    } else {
        $dqwp=0;
        echo "<font color=red>输入有误请重新输入</font>"."<br>";
        echo "<br>";
    }
} else {
    $dqwp=0;
    echo "<font color=red>输入有误请重新输入</font>"."<br>";
    echo "<br>";
}

