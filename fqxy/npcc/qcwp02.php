<?php

if($sll!=0){
    if($wpsl>=$sl){
        include(XY_DIR . "/wp/wpxx.php");
        include(XY_DIR . "/ini/zt_ini.php");
        include(XY_DIR . "/ini/ckrl_ini.php");
        $inina="zt.ini";
        $path='ache/'.$wjid;
        $ininame = $path."/".$inina;
        $iniFile = new iniFile($ininame);
        $wjxx=($iniFile->getItem('玩家信息',['背包容量','仓库容量']));
        $bbrlb=$wjxx['背包容量'];
        $cbbrlb=$wjxx['仓库容量'];

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
                if($ymid==278||$ymid==279||$ymid==281||$ymid==282||$ymid==283||$ymid==284||$ymid==285){
                    echo $wpsl;
                    //背包减
                    $q2="ckwp";
                    $strsql = "update $q2 set wpsl=$wpsl where wjid=$wjid and wpid=$npcc";//物品id号必改值
                    $result = mysql_query($strsql);

                    $q2="wp";
                    $sql1=mysql_query("select * from $q2 where wjid=$wjid and wpid=$npcc");
                    $info1=@mysql_fetch_array($sql1);
                    $ckwpid=$info1['wpid'];
                    $ckwpsl=$info1['wpsl'];
                    if($ckwpid==""){
                        $ckwpsl=$ckwpsl+$sl;
                        include("./wp/wpxx.php");
                        $q2="wp";
                        $sql = "insert into $q2 (wjid,wpid,wpsl,wpfl)  values('$wjid','$npcc','$ckwpsl','$wpfl')";
                        if (!mysql_query($sql)){
                            die('Error: ' . mysql_error());
                        }
                    } else{
                        $q2="wp";
                        $ckwpsl=$ckwpsl+$sl;
                        $strsql = "update $q2 set wpsl=$ckwpsl where wjid=$wjid and wpid=$ckwpid";//物品id号必改值
                        $result = mysql_query($strsql);
                    }
                } elseif($ymid==286){ //背包其他
                    $q2="qt";
                    $strsql = "update $q2 set wpsl=$wpsl where wjid=$wjid and  wpid=$npcc";//物品id号必改值
                    $result = mysql_query($strsql);
                }

                if($ymid==278){
                    $inina="ckwp.ini";
                    $path='ache/'.$wjid;
                    $ininame = $path."/".$inina;
                    $iniFile = new iniFile($ininame);
                    $iniFile->updItem('书卷数量', [$npcc => $wpsl]);
                    $inina="wp.ini";
                    $path='ache/'.$wjid;
                    $ininame = $path."/".$inina;
                    _unlink($ininame); //删除文件

                } elseif($ymid==279){ //背包材料
                    $inina="ckcl.ini";
                    $path='ache/'.$wjid;
                    $ininame = $path."/".$inina;
                    $iniFile = new iniFile($ininame);
                    $iniFile->updItem('材料数量', [$npcc => $wpsl]);

                    $inina="cl.ini";
                    $path='ache/'.$wjid;
                    $ininame = $path."/".$inina;
                    _unlink($ininame); //删除文件
                } elseif($ymid==281){ //背包商城
                    $inina="cksc.ini";
                    $path='ache/'.$wjid;
                    $ininame = $path."/".$inina;
                    $iniFile = new iniFile($ininame);
                    $iniFile->updItem('商城数量', [$npcc => $wpsl]);

                    $inina="sc.ini";
                    $path='ache/'.$wjid;
                    $ininame = $path."/".$inina;
                    _unlink($ininame); //删除文件
                } elseif($ymid==282){ //背包丹药
                    $inina="ckdy.ini";
                    $path='ache/'.$wjid;
                    $ininame = $path."/".$inina;
                    $iniFile = new iniFile($ininame);
                    $iniFile->updItem('丹药数量', [$npcc => $wpsl]);

                    $inina="dy.ini";
                    $path='ache/'.$wjid;
                    $ininame = $path."/".$inina;
                    _unlink($ininame); //删除文件
                } elseif($ymid==283){ //背包任务
                    $inina="ckrw.ini";
                    $path='ache/'.$wjid;
                    $ininame = $path."/".$inina;
                    $iniFile = new iniFile($ininame);
                    $iniFile->updItem('任务数量', [$npcc => $wpsl]);

                    $inina="rw.ini";
                    $path='ache/'.$wjid;
                    $ininame = $path."/".$inina;
                    _unlink($ininame); //删除文件

                } elseif($ymid==284){ //背包农场
                    $inina="cknc.ini";
                    $path='ache/'.$wjid;
                    $ininame = $path."/".$inina;
                    $iniFile = new iniFile($ininame);
                    $iniFile->updItem('农场数量', [$npcc => $wpsl]);

                    $inina="nc.ini";
                    $path='ache/'.$wjid;
                    $ininame = $path."/".$inina;
                    _unlink($ininame); //删除文件
                } elseif($ymid==285){ //背包宝箱
                    $inina="ckbx.ini";
                    $path='ache/'.$wjid;
                    $ininame = $path."/".$inina;
                    $iniFile = new iniFile($ininame);
                    $iniFile->updItem('宝箱数量', [$npcc => $wpsl]);

                    $inina="bx.ini";
                    $path='ache/'.$wjid;
                    $ininame = $path."/".$inina;
                    _unlink($ininame); //删除文件
                } elseif($ymid==286){ //背包其他
                    $inina="ckqt.ini";
                    $path='ache/'.$wjid;
                    $ininame = $path."/".$inina;
                    $iniFile = new iniFile($ininame);
                    $iniFile->updItem('其他数量', [$npcc => $wpsl]);

                    $inina="qt.ini";
                    $path='ache/'.$wjid;
                    $ininame = $path."/".$inina;
                    _unlink($ininame); //删除文件
                }

                if($ymid==278||$ymid==279||$ymid==281||$ymid==282||$ymid==283||$ymid==284||$ymid==285){
                    include("./wp/wpxx.php");
                } elseif($ymid==286){ //背包其他
                    $bsid=$npcc;
                    include("./wp/zbbs.php");
                    $wpmz=$bsmz;
                    $wpzl=$bszl;
                }

                $inina="ckrl.ini";
                $path='ache/'.$wjid;
                $ininame = $path."/".$inina;
                $iniFile = new iniFile($ininame);
                $bbrla=($iniFile->getItem('仓库已用容量','容量'));
                $rl=$wpzl*$sl;
                $wprl=$bbrla-$rl;
                $iniFile->updItem('仓库已用容量', ['容量' => $wprl]);

                $inina="bbrl.ini";
                $path='ache/'.$wjid;
                $ininame = $path."/".$inina;
                $iniFile = new iniFile($ininame);

                $ckbbrla=($iniFile->getItem('背包已用容量','容量'));
                $rl=$wpzl*$sl;
                $wprl=$ckbbrla+$rl;
                $iniFile->updItem('背包已用容量', ['容量' => $wprl]);

                $inina="user.ini";
                $path='ache/'.$wjid;
                $ininame = $path."/".$inina;
                $iniFile = new iniFile($ininame);
                $iniFile->updItem('验证信息', ['cmid值' => $ymid]);
                echo "<font color=red>你取出了".$wpmz."x".$sl."</font>"."<br>";
                echo "<br>";

                if($ymid==278){//背包书卷
                    include("template/xy278.php");
                    include("./pz/pz01.php");
                } elseif($ymid==279){ //背包材料
                    include("template/xy279.php");
                    include("./pz/pz01.php");
                } elseif($ymid==281){ //背包商城
                    include("template/xy281.php");
                    include("./pz/pz01.php");
                } elseif($ymid==282){ //背包丹药
                    include("template/xy282.php");
                    include("./pz/pz01.php");
                } elseif($ymid==283){ //背包任务
                    include("template/xy283.php");
                    include("./pz/pz01.php");
                } elseif($ymid==284){ //背包农场
                    include("template/xy284.php");
                    include("./pz/pz01.php");
                } elseif($ymid==285){ //背包宝箱
                    include("template/xy285.php");
                    include("./pz/pz01.php");
                } elseif($ymid==286){ //背包宝箱
                    include("template/xy286.php");
                    include("./pz/pz01.php");
                }
            } elseif($wpsl==$sl){

                $wpsl=$wpsl-$sl;
                if($ymid==278||$ymid==279||$ymid==281||$ymid==282||$ymid==283||$ymid==284||$ymid==285){
                    $q2="ckwp";
                    $strsql = "delete from $q2 where wjid=$wjid and wpid=$npcc ";//物品id号必改值
                    $result = mysql_query($strsql);

                    $q2="wp";
                    $sql1=mysql_query("select * from $q2 where wjid=$wjid and wpid=$npcc",$conn);
                    $info1=@mysql_fetch_array($sql1);
                    $ckwpid=$info1['wpid'];
                    $ckwpsl=$info1['wpsl'];
                    if($ckwpid==""){
                        $ckwpsl=$ckwpsl+$sl;
                        include("./wp/wpxx.php");
                        $q2="wp";
                        $sql = "insert into $q2 (wjid,wpid,wpsl,wpfl)  values('$wjid','$npcc','$ckwpsl','$wpfl')";
                        if (!mysql_query($sql)){
                            die('Error: ' . mysql_error());
                        }
                    } else{
                        $q2="wp";
                        $ckwpsl=$ckwpsl+$sl;
                        $strsql = "update $q2 set wpsl=$ckwpsl where wjid=$wjid and wpid=$ckwpid";//物品id号必改值
                        $result = mysql_query($strsql);
                    }
                } elseif($ymid==286){ //背包其他
                    $q2="qt";
                    $strsql = "delete from $q2 where wjid=$wjid and wpid=$npcc ";//物品id号必改值
                    $result = mysql_query($strsql);
                }

                if($ymid==278){//背包书卷
                    $inina="ckwp.ini";
                    $path='ache/'.$wjid;
                    $ininame = $path."/".$inina;
                    $iniFile = new iniFile($ininame);
                    $xlh=($iniFile->getItem('序列',$npcc));
                    $iniFile->delItem('书卷id', $xlh);
                    $iniFile->delItem('序列', $npcc);
                    $iniFile->delItem('书卷数量', $npcc);
                    $iniFile->delItem('书卷名字', $npcc);

                    $inina="wp.ini";
                    $path='ache/'.$wjid;
                    $ininame = $path."/".$inina;
                    _unlink($ininame); //删除文件
                } elseif($ymid==279){ //背包材料
                    $inina="ckcl.ini";
                    $path='ache/'.$wjid;
                    $ininame = $path."/".$inina;
                    $iniFile = new iniFile($ininame);
                    $xlh=($iniFile->getItem('序列',$npcc));
                    $iniFile->delItem('材料id', $xlh);
                    $iniFile->delItem('序列', $npcc);
                    $iniFile->delItem('材料数量', $npcc);
                    $iniFile->delItem('材料名字', $npcc);

                    $inina="cl.ini";
                    $path='ache/'.$wjid;
                    $ininame = $path."/".$inina;
                    _unlink($ininame); //删除文件
                } elseif($ymid==281){ //背包商城
                    $inina="cksc.ini";
                    $path='ache/'.$wjid;
                    $ininame = $path."/".$inina;
                    $iniFile = new iniFile($ininame);
                    $xlh=($iniFile->getItem('序列',$npcc));
                    $iniFile->delItem('商城id', $xlh);
                    $iniFile->delItem('序列', $npcc);
                    $iniFile->delItem('商城数量', $npcc);
                    $iniFile->delItem('商城名字', $npcc);

                    $inina="sc.ini";
                    $path='ache/'.$wjid;
                    $ininame = $path."/".$inina;
                    _unlink($ininame); //删除文件
                } elseif($ymid==282){ //背包丹药
                    $inina="ckdy.ini";
                    $path='ache/'.$wjid;
                    $ininame = $path."/".$inina;
                    $iniFile = new iniFile($ininame);
                    $xlh=($iniFile->getItem('序列',$npcc));
                    $iniFile->delItem('丹药id', $xlh);
                    $iniFile->delItem('序列', $npcc);
                    $iniFile->delItem('丹药数量', $npcc);
                    $iniFile->delItem('丹药名字', $npcc);

                    $inina="dy.ini";
                    $path='ache/'.$wjid;
                    $ininame = $path."/".$inina;
                    _unlink($ininame); //删除文件
                } elseif($ymid==283){ //背包任务
                    $inina="ckrw.ini";
                    $path='ache/'.$wjid;
                    $ininame = $path."/".$inina;
                    $iniFile = new iniFile($ininame);
                    $xlh=($iniFile->getItem('序列',$npcc));
                    $iniFile->delItem('任务id', $xlh);
                    $iniFile->delItem('序列', $npcc);
                    $iniFile->delItem('任务数量', $npcc);
                    $iniFile->delItem('任务名字', $npcc);

                    $inina="rw.ini";
                    $path='ache/'.$wjid;
                    $ininame = $path."/".$inina;
                    _unlink($ininame); //删除文件
                } elseif($ymid==284){ //背包农场
                    $inina="cknc.ini";
                    $path='ache/'.$wjid;
                    $ininame = $path."/".$inina;
                    $iniFile = new iniFile($ininame);
                    $xlh=($iniFile->getItem('序列',$npcc));
                    $iniFile->delItem('农场id', $xlh);
                    $iniFile->delItem('序列', $npcc);
                    $iniFile->delItem('农场数量', $npcc);
                    $iniFile->delItem('农场名字', $npcc);

                    $inina="nc.ini";
                    $path='ache/'.$wjid;
                    $ininame = $path."/".$inina;
                    _unlink($ininame); //删除文件
                } elseif($ymid==285){ //背包宝箱
                    $inina="ckbx.ini";
                    $path='ache/'.$wjid;
                    $ininame = $path."/".$inina;
                    $iniFile = new iniFile($ininame);
                    $xlh=($iniFile->getItem('序列',$npcc));
                    $iniFile->delItem('宝箱id', $xlh);
                    $iniFile->delItem('序列', $npcc);
                    $iniFile->delItem('宝箱数量', $npcc);
                    $iniFile->delItem('宝箱名字', $npcc);

                    $inina="bx.ini";
                    $path='ache/'.$wjid;
                    $ininame = $path."/".$inina;
                    _unlink($ininame); //删除文件
                } elseif($ymid==286){ //背包其他
                    $inina="ckqt.ini";
                    $path='ache/'.$wjid;
                    $ininame = $path."/".$inina;
                    $iniFile = new iniFile($ininame);
                    $xlh=($iniFile->getItem('序列',$npcc));
                    $iniFile->delItem('其他id', $xlh);
                    $iniFile->delItem('其他', $npcc);
                    $iniFile->delItem('其他数量', $npcc);
                    $iniFile->delItem('其他名字', $npcc);

                    $inina="qt.ini";
                    $path='ache/'.$wjid;
                    $ininame = $path."/".$inina;
                    _unlink($ininame); //删除文件
                }


                if($ymid==278||$ymid==279||$ymid==281||$ymid==282||$ymid==283||$ymid==284||$ymid==285){
                    include("./wp/wpxx.php");
                } elseif($ymid==286){ //背包其他
                    $bsid=$npcc;
                    include("./wp/zbbs.php");
                    $wpmz=$bsmz;
                    $wpzl=$bszl;
                }

                $inina="ckrl.ini";
                $path='ache/'.$wjid;
                $ininame = $path."/".$inina;
                $iniFile = new iniFile($ininame);
                $bbrla=($iniFile->getItem('仓库已用容量','容量'));
                $rl=$wpzl*$sl;
                $wprl=$bbrla-$rl;
                $iniFile->updItem('仓库已用容量', ['容量' => $wprl]);

                $inina="bbrl.ini";
                $path='ache/'.$wjid;
                $ininame = $path."/".$inina;
                $iniFile = new iniFile($ininame);
                $ckbbrla=($iniFile->getItem('背包已用容量','容量'));
                $rl=$wpzl*$sl;
                $wprl=$ckbbrla+$rl;
                $iniFile->updItem('背包已用容量', ['容量' => $wprl]);

                $inina="user.ini";
                $path='ache/'.$wjid;
                $ininame = $path."/".$inina;
                $iniFile = new iniFile($ininame);
                $iniFile->updItem('验证信息', ['cmid值' => $ymid]);
                echo "<font color=red>你取出了".$wpmz."x".$sl."</font>"."<br>";
                echo "<br>";
                if($ymid==278){//背包书卷
                    include("template/xy278.php");
                    include("./pz/pz01.php");
                } elseif($ymid==279){ //背包材料
                    include("template/xy279.php");
                    include("./pz/pz01.php");
                } elseif($ymid==281){ //背包商城
                    include("template/xy281.php");
                    include("./pz/pz01.php");
                } elseif($ymid==282){ //背包丹药
                    include("template/xy282.php");
                    include("./pz/pz01.php");
                } elseif($ymid==283){ //背包任务
                    include("template/xy283.php");
                    include("./pz/pz01.php");
                } elseif($ymid==284){ //背包农场
                    include("template/xy284.php");
                    include("./pz/pz01.php");
                } elseif($ymid==285){ //背包宝箱
                    include("template/xy285.php");
                    include("./pz/pz01.php");
                } elseif($ymid==286){ //背包宝箱
                    include("template/xy286.php");
                    include("./pz/pz01.php");
                }
            } else {
                $dqwp=0;
                echo "<font color=red>输入有误请重新输入</font>"."<br>";
                echo "<br>";
            }
        } else{
            $dqwp=0;
            $qbwp=1;
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

