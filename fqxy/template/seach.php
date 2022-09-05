<?php

if($_POST['submit1']){
    include("./ini/zt_ini.php");
    $vip=($iniFile->getItem('玩家信息','vip等级'));
    if($vip>=3){
        $wjtake10= $_POST['wjtoke'];
        $wjtakes2=iconv_strlen($wjtake10,"UTF-8");
        $wjtake = iconv("utf-8","gbk",$wjtake10);
        if($wjtake10!=""){
            if($wjtakes2>0&&$wjtakes2<=10||$wjtakes2>0&&$wjtakes2<=10){
                if($wjtakes2>0){
                    $wjtake=$wjtake10;
                }
                if(preg_match("/[a-zA-Z0-9';~`@#$%^&+=)(<>{}]|\]|\[|\/|\\\|\"|\|/",$wjtake)){
                    $tszf=2;
                } else{
                    $tszf=1;
                }
                if($tszf==1){
                    $sea=$wjtake;
                    function search($sea,$keywpid,$keywpsl,$keywpmz) {
                        foreach($keywpid as $key=>$val){
                            $a[$key]['id']=$keywpid[$key];
                            $a[$key]['pid']=$keywpsl[$key];
                            $a[$key]['name']=$keywpmz[$key];
                        }
                        $arr=$result=array();
                        foreach ($a as $key => $value) {
                            foreach ($value as $valu) {
                                if(strstr($valu, $sea) !== false){
                                    array_push($arr, $key);
                                }
                            }
                        }
                        foreach ($arr as $key => $value) {
                            if(array_key_exists($value,$a)){
                                array_push($result, $a[$value]);
                            }
                        }
                        return $result;
                    }

                    //获取背包所有数据（除宝石和装备）
                    include("./ini/wp_ini.php");
                    $wpid=($iniFile->getCategory('书卷id'));
                    $wpmz=($iniFile->getCategory('书卷名字'));
                    $wpsl=($iniFile->getCategory('书卷数量'));
                    foreach(array_keys($wpmz) as $key){
                        $keywpmz[]=$wpmz[$key];
                    }
                    foreach(array_keys($wpsl) as $key){
                        $keywpsl[]=$wpsl[$key];
                    }
                    foreach(array_keys($wpid) as $key){
                        $keywpid[]=$wpid[$key];
                    }

                    include("./ini/cl_ini.php");
                    $wpid=($iniFile->getCategory('材料id'));
                    $wpmz=($iniFile->getCategory('材料名字'));
                    $wpsl=($iniFile->getCategory('材料数量'));
                    foreach(array_keys($wpmz) as $key){
                        $keywpmz[]=$wpmz[$key];
                    }
                    foreach(array_keys($wpsl) as $key){
                        $keywpsl[]=$wpsl[$key];
                    }
                    foreach(array_keys($wpid) as $key){
                        $keywpid[]=$wpid[$key];
                    }

                    include("./ini/sc_ini.php");
                    $wpid=($iniFile->getCategory('商城id'));
                    $wpmz=($iniFile->getCategory('商城名字'));
                    $wpsl=($iniFile->getCategory('商城数量'));
                    foreach(array_keys($wpmz) as $key){
                        $keywpmz[]=$wpmz[$key];
                    }
                    foreach(array_keys($wpsl) as $key){
                        $keywpsl[]=$wpsl[$key];
                    }
                    foreach(array_keys($wpid) as $key){
                        $keywpid[]=$wpid[$key];
                    }

                    include("./ini/dy_ini.php");
                    $wpid=($iniFile->getCategory('丹药id'));
                    $wpmz=($iniFile->getCategory('丹药名字'));
                    $wpsl=($iniFile->getCategory('丹药数量'));
                    foreach(array_keys($wpmz) as $key){
                        $keywpmz[]=$wpmz[$key];
                    }
                    foreach(array_keys($wpsl) as $key){
                        $keywpsl[]=$wpsl[$key];
                    }
                    foreach(array_keys($wpid) as $key){
                        $keywpid[]=$wpid[$key];
                    }

                    include("./ini/rw_ini.php");
                    $wpid=($iniFile->getCategory('任务id'));
                    $wpmz=($iniFile->getCategory('任务名字'));
                    $wpsl=($iniFile->getCategory('任务数量'));
                    foreach(array_keys($wpmz) as $key){
                        $keywpmz[]=$wpmz[$key];
                    }
                    foreach(array_keys($wpsl) as $key){
                        $keywpsl[]=$wpsl[$key];
                    }
                    foreach(array_keys($wpid) as $key){
                        $keywpid[]=$wpid[$key];
                    }

                    include("./ini/nc_ini.php");
                    $wpid=($iniFile->getCategory('农场id'));
                    $wpmz=($iniFile->getCategory('农场名字'));
                    $wpsl=($iniFile->getCategory('农场数量'));
                    foreach(array_keys($wpmz) as $key){
                        $keywpmz[]=$wpmz[$key];
                    }
                    foreach(array_keys($wpsl) as $key){
                        $keywpsl[]=$wpsl[$key];
                    }
                    foreach(array_keys($wpid) as $key){
                        $keywpid[]=$wpid[$key];
                    }

                    include("./ini/bx_ini.php");
                    $wpid=($iniFile->getCategory('宝箱id'));
                    $wpmz=($iniFile->getCategory('宝箱名字'));
                    $wpsl=($iniFile->getCategory('宝箱数量'));
                    foreach(array_keys($wpmz) as $key){
                        $keywpmz[]=$wpmz[$key];
                    }
                    foreach(array_keys($wpsl) as $key){
                        $keywpsl[]=$wpsl[$key];
                    }
                    foreach(array_keys($wpid) as $key){
                        $keywpid[]=$wpid[$key];
                    }

                    $m=count($keywpid,0);
                    if($m>=1){
                        //获取背包所有数据（除宝石和装备）
                        $sky=search($sea,$keywpid,$keywpsl,$keywpmz);
                        $wparr1 = $wparr1 ?? [];
                        $wparr2 = $wparr2 ?? [];
                        $wparr3 = $wparr3 ?? [];
                        foreach ($sky as $key => $value) {
                            $wparr1[]=$value['id'];
                            $wparr2[]=$value['name'];
                            $wparr3[]=$value['pid'];
                        }
                        $m=count($wparr2,0);

                        $i=-1;
                        if($m>=1){
                            echo "<font color=red>搜索关于【".$sea."】的物品如下：</font>"."<br>";
                            for($d=0;$d<$m;$d++){
                                $i=$i+1;
                                $ivd=$wparr1[$i];
                                $mvz=$wparr2[$i];
                                $svl=$wparr3[$i];
                                $ssl[]=$svl;
                                $iid[]=$ivd;
                                $mz[]=$mvz;
                            }
                            $iid=[];
                            $mz=[];
                            $ssl=[];
                            $inina="seach.ini";
                            $path='ache/'.$wjid;
                            $ininame = $path."/".$inina;
                            _unlink($ininame); //删除文件

                            //判断ini文件是否存在如不没有则从数据库提取并且写入ini
                            $inina="seach.ini";
                            $path='ache/'.$wjid;
                            $file = $path."/".$inina;
                            if(file_exists($file)){
                            }else{
                                $inina="seach.ini";
                                $path='ache/'.$wjid;
                                $file = $path."/".$inina;
                                file_put_contents($file,"[玩家搜索]");
                                $iniFile = new iniFile($file);
                                $i=-1;
                                for($d=0;$d<$m;$d++){
                                    $i=$i+1;
                                    $iniFile->addItem('物品id',[$i => $wparr1[$i]]);
                                }
                            }
                        } else{
                            $inina="seach.ini";
                            $path='ache/'.$wjid;
                            $ininame = $path."/".$inina;
                            _unlink($ininame); //删除文件
                            echo "<font color=red>没有找到关于[".$sea."]的物品</font>";
                        }
                    } else{
                        $inina="seach.ini";
                        $path='ache/'.$wjid;
                        $ininame = $path."/".$inina;
                        _unlink($ininame); //删除文件
                        echo "<font color=red>没有找到关于[".$sea."]的物品</font>";
                    }
                    $ssl=[];
                    $iid=[];
                    $mz=[];
                    $keywpmz=[];
                    $keywpsl=[];
                    $keywpid=[];
                    $wpid=[];
                    $wpmz=[];
                    $wpsl=[];

                    //执行搜索物品代码
                } else{
                    echo "<font color=red>你输入的关键包含敏感字符请重新输入</font>"."<br>";
                }
            } else{
                echo "<font color=red>长度不能超过5个字符</font><br>";
            }
        } else{
            echo "<font color=red>关键字不能为空</font><br>";
        }
    } else{
        echo"<font color=black>骚年~~需要Vip3级使用此项功能</font></a></br>";
    }

    $cmid=$cmid+1;
    $cdid[]=$cmid;
    $clj[]=27;
    $npc[]=0;
    $search_url = "xy.php?uid=$wjid&cmd=$cmid&sid=$a1";
}

?>
<form  action="<?php echo $search_url?>" method="POST">
    <input  type="text" name="wjtoke" placeholder="关键字"id='search'>
    <input  type="submit" name="submit1" value="搜索"id="search1" ><br>
</form>