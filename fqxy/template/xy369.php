<?php
//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
    $cwidd=$npcc;
    if($cwidd!=""){
        include("./ini/cw_ini.php");
        $inina="user.ini";
        $path='ache/'.$wjid;
        $ininame = $path."/".$inina;
        $iniFile = new iniFile($ininame);
        $yymid=($iniFile->getItem('最后页面id','页面id'));

        if($yymid==365){
            //存入宠物id
            $iniFile->updItem('宠物名字', ['初始' => $cwidd]);
        } else{
            //获取宠物ID
            $cwidd=($iniFile->getItem('宠物名字','初始'));
        }

        if($_POST['submit']){
            $wjtake10= $_POST['wjtoke'];
            $wjtakes2=mb_strlen($wjtake10);
            $wjtake = $wjtake10;
            if($wjtake10!=""){
                if($wjtakes2>0&&$wjtakes2<=7||$wjtakes2>0&&$wjtakes2<=7){
                    if($wjtakes2>0){
                        $wjtake=$wjtake10;
                    }
                    if(preg_match("/[ ';~`@#$%^&+=)(<>{}]|\]|\[|\/|\\\|\"|\|/",$wjtake)){
                        $tszf=2;
                    } else{
                        $tszf=1;
                    }
                    if($tszf==1){
                        include("./sql/mysql.php");//调用数据库连接
                        $arr = explode("_",$cwidd);
                        $cwidd1=$arr[0];
                        $cwidd2=$arr[1];
                        $q2="cw";
                        $strsql = "update $q2 set cwmz='$wjtake' where wjid=$wjid and id=$cwidd2";//物品id号必改值
                        $result = mysql_query($strsql);
                        include("./ini/zt_ini.php");
                        include("./ini/cw_ini.php");
                        $iniFile->updItem('宠物名字', [$cwidd => $wjtake]);
                        echo "<font color=red>恭喜你！！你将宠物名字改为了".$wjtake."</font>"."<br>";
                    } else{
                        echo "<font color=red>你输入的名字包含敏感字符请重新输入</font>"."<br>";
                    }
                } else{
                    echo "<font color=red>名字长度不能超过限制</font><br>";
                }
            } else{
                echo "<font color=red>名字不能为空</font><br>";
            }
        }

        $cmid=$cmid+1;
        $cdid[]=$cmid;
        $clj[]=369;
        $npc[]=$npcc;
        $formurl = sprintf('xy.php?uid=%d&cmd=%d&sid=%s', $wjid, $cmid, $a1);
        ?>
        <form  action="<?php echo $formurl?>" method="POST">
            <font color=black>你输入你想要给宠物取的名字</font><br>
            <input  type="text" name="wjtoke" placeholder="新宠名字"id='search'><br>
            <input  type="submit" name="submit" value="改名"id="search1" ><br>
        </form>
        <?php
        $cmid=$cmid+1;
        $cdid[]=$cmid;
        $clj[]=365;
        $npc[]=$cwidd;
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";

        $cmid=$cmid+1;
        $cdid[]=$cmid;
        $clj[]=362;
        $npc[]=0;
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回宠物</font></a>"."<br>";
        echo "<br>";

        $cmid=$cmid+1;
        $cdid[]=$cmid;
        $clj[]=2;
        $npc[]=0;
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
    } else{
        echo "<font color=red>宠物有误！！请联系GM解决此问题</font>"."<br>";
        echo "<br>";
        $cmid=$cmid+1;
        $cdid[]=$cmid;
        $clj[]=2;
        $npc[]=0;
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
    }
}

//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini

