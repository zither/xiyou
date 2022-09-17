<?php

if($_POST['submit']){
    $sl= $_POST['sl'];
    $sll=preg_match('/^\d+$/i', $sl);
    if($sll!=0){
        if($sl>=10000000&&$sl<=10000000000){
            $zspd=0;
            $zsspd=0;
            //路径
            $path='acher/hdjc';
            $ininalock="qtjc.txt";
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
                include("./ini/zt_ini.php");
                $cqwjmz=($iniFile->getItem('玩家信息','玩家名字'));
                $cqwjvip=($iniFile->getItem('玩家信息','vip等级'));
                include("./ini/yl_ini.php");
                $cqyl=($iniFile->getItem('背包仓库银两','背包银两'));
                if($cqyl>=$sl){
                    $yl1=$sl;
                    $wwpsl=$yl1;
                    include("./pz/ini_pz013.php");
                    include("./ini/qtjc_ini.php");
                    $q2="all_qtjc";
                    $timex=time();
                    $sql1 = "insert into $q2 (wjid,vip,wjmz,jcjg,cq,timex)  values('$wjid','$cqwjvip','$cqwjmz','$sl','1','$timex')";
                    if (!mysql_query($sql1)) {
                        die('Error: ' . mysql_error());
                    }

                    $inina="qtjc.ini";
                    $path='acher/hdjc';
                    $ininame = $path."/".$inina;
                    _unlink($ininame); //删除文件

                    //数字转汉字
                    $yl=$sl;
                    include("./pz/ylts.php");
                    $xtxx= "玩家".$cqwjmz."用".$ylxx."银两进行【开拳竞猜】，请有实力的玩家前去识破！！";
                    include("./msg/msgg02.php");
                    echo "<font color=red>恭喜你！使用花费了".$ylxx."银两进行【左开拳】猜拳请等待结果！！</font></a>"."<br>";
                } else {
                    $yl=$sl;
                    include("./pz/ylts.php");
                    echo "<font color=black>对不起！你开拳价格不足".$ylxx."两</font>";
                }
                flock($fp,LOCK_UN);
            } else{
                echo "服务器开小差了";
            }
        } else {
            echo "<font color=red>开拳价格应该在1000万-100亿之间</font>"."<br>";
            echo "<br>";
        }
    } else {
        echo "<font color=red>输入有误请重新输入</font>"."<br>";
        echo "<br>";
    }

    $cmid=$cmid+1;
    $cdid[]=$cmid;
    $clj[]=462;
    $npc[]=0;
    $formurl = sprintf('xy.php?uid=%d&cmd=%d&sid=%s', $wjid, $cmid, $a1);

}
echo "<font color=balck>请输入你想左开拳的价格（银两）：</font>"."<br>";
?>
    <form  action="<?php echo $formurl?>" method="POST">
        <input type="tel" name="sl" placeholder="银两"id='search'onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')"><br>
        <input  type="submit" name="submit"  value="左开拳" id="search1"><br>
    </form>
<?php



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=403;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回娱乐</font></a>"."<font color=black></font>"."<br>";
