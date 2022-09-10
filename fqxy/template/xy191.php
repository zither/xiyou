<?php

//当日攻城的主城编号
$week = zcid(true);
if($week==6){
    echo "<font color=black>全体人员进行休整今天不开放国战哦！请于明天再来（周六停战）</font>"."<br>";
} else{
    include(XY_DIR . "/wj/gztime.php");//调用国战时间
    //开发调试
    if($gztime==2){
        echo "<font color=black>报名参与国战的时间已过或者国战已结束,请明天不要再迟到了哦（除周六每天00:00-20:55期间报名）</font>"."<br>";
    } else{
        include("./ini/zt_ini.php");
        $bpid=($iniFile->getItem('玩家信息','帮派id'));
        if($bpid>=1){
            include("./ini/bpp_ini.php");
            $xl=($iniFile->getItem('序列',$wjid));
            $gjgx1=($iniFile->getItem('贡献',$xl));
            $gjgx2=($iniFile->getItem('历史贡献',$xl));
            include("./ini/bp_ini.php");
            $bp=($iniFile->getCategory('国家信息'));
            $xbzmz=$bp['现任君主'];
            $xwjid=$bp['现任君主id'];

            //判断攻城报名表是否合法
            include XY_DIR . '/ini/xtbl_ini.php';
            $m= date('n');
            $d= date('j');
            if($xtbl1 !=$m || $xtbl2 != $d){
                // 更新系统变量
                gz_xtbl(1, $m, $d);
            }

            //调用zt.ini是否存在
            include("./ini/zt_ini.php");
            $bpid=($iniFile->getItem('玩家信息','帮派id'));
            $bpmzr=($iniFile->getItem('玩家信息','帮派名字'));

            if($bpid>=1){
                $bpzw=($iniFile->getItem('玩家信息','帮派职务'));
                if($bpzw=="辅助大臣"){
                    $bpzw=2;
                } elseif($bpzw=="军机大臣"){
                    $bpzw=3;
                } elseif($bpzw=="财政大臣"){
                    $bpzw=4;
                } elseif($bpzw=="工部大臣"){
                    $bpzw=5;
                } elseif($bpzw=="外交大臣"){
                    $bpzw=6;
                } elseif($bpzw=="军团长"){
                    $bpzw=7;
                } elseif($bpzw=="君主"){
                    $bpzw=8;
                } else{
                    $bpzw=1;
                }

                if($bpzw>=2&&$bpzw<=8){
                    ////////////////////更新排行榜国家和个人积分榜//////////////
                    include("./ini/gz05_ini.php");
                    $gztime=($iniFile->getItem('国战判断时间','1'));
                    if($gztime==""){
                        $gztime = date('Y-m-d H:i:s');
                        gz05(1, $gztime);
                    }

                    //判断是否清掉国战积分榜
                    $nowtime=date('Y-m-d H:i:s');
                    $gztime1 = substr($gztime,0,10);
                    $nowtime1 = substr($nowtime,0,10);
                    if($gztime1 !=$nowtime1){//今天不是今天数据验证
                        gz05(1, $nowtime);
                    }

                    //排行榜计时器
                    $gztime=($iniFile->getItem('国战判断时间','2'));
                    if($gztime==""){
                        $gztime = date('Y-m-d H:i:s');
                        gz05(2, $gztime);
                    }

                    //判断是否清掉国战个人积分榜
                    $nowtime=date('Y-m-d H:i:s');
                    $gztime1 = substr($gztime,0,10);
                    $nowtime1 = substr($nowtime,0,10);
                    if($gztime1 !=$nowtime1){//今天不是今天数据验证
                        gz05(2, $nowtime);
                    }

                    $db = DB::instance();
                    $gz03 = gz03($bpid);
                    $jt = date('Ymd');
                    if(empty($gz03) || $gz03['cjsj'] != $jt){
                        if (empty($gz03)) {
                            ////////////////////将报名的国家写入国战2表内////////////////////////
                            $q2 = "gz03";
                            $sql1 = mysql_query("select MAX(id) from $q2");
                            $abc = mysql_fetch_array($sql1);
                            $maxid = $abc[0];
                            if ($maxid == "") {
                                $maxid = 0;
                            }
                            $maxidd = $maxid + 1;
                            $sql = "insert into $q2 (id,gjmz,gjid,jzmz,jzid,zjf,rjf,cjsj, zlq, rlq)  values('$maxidd','$bpmzr','$bpid','$xbzmz','$xwjid','0', '0', '$jt', 0, 0)";
                            if (!mysql_query($sql)) {
                                die('Error: ' . mysql_error());
                            }
                        } else {
                            $data = [
                                'rjf' => 0,
                                'rlq' => 0,
                                'cjsj' => $jt,
                            ];

                            //如果是新的国战周期，重置周积分榜
                            if (empty($gz03['cjsj']) ||  new_week($gz03['cjsj'])) {
                                $data['zjf'] = 0;
                                $data['zlq'] = 0;
                            }
                            $db->update('gz03', $data, ['gjid' => $bpid]);
                        }

////////////////////更新国战个人死亡次数////////////////////////
////////////////////更新国战个人死亡次数////////////////////////
////////////////////更新国战防守方////////////////////////
////////////////////更新国战防守方////////////////////////
                        $zcid = zcid();
                        if ($zcid) {
                            zlbp_cz($zcid);
                        }

                        ////////////////////更新国战地图神兽大门血量//////////////
                        ////////城池大门//////////
                        $bossid=1;//世界boss-ID号
                        $npcc=$bossid;
                        $inina="boss_".$bossid.".ini";
                        $path='acher/all_boss';
                        $ininame = $path."/".$inina;
                        _unlink($ininame); //删除文件
                        include("./ini/boss_ini.php");

                        ////////中门//////////
                        $bossid=2;//世界boss-ID号
                        $npcc=$bossid;
                        $inina="boss_".$bossid.".ini";
                        $path='acher/all_boss';
                        $ininame = $path."/".$inina;
                        _unlink($ininame); //删除文件
                        include("./ini/boss_ini.php");

                        ////////守卫//////////
                        $bossid=3;//世界boss-ID号
                        $npcc=$bossid;
                        $inina="boss_".$bossid.".ini";
                        $path='acher/all_boss';
                        $ininame = $path."/".$inina;
                        _unlink($ininame); //删除文件
                        include("./ini/boss_ini.php");

                        ////////守卫//////////
                        $bossid=4;//世界boss-ID号
                        $npcc=$bossid;
                        $inina="boss_".$bossid.".ini";
                        $path='acher/all_boss';
                        $ininame = $path."/".$inina;
                        _unlink($ininame); //删除文件
                        include("./ini/boss_ini.php");

                        ////////守卫//////////
                        $bossid=5;//世界boss-ID号
                        $npcc=$bossid;
                        $inina="boss_".$bossid.".ini";
                        $path='acher/all_boss';
                        $ininame = $path."/".$inina;
                        _unlink($ininame); //删除文件
                        include("./ini/boss_ini.php");

                        ////////守卫//////////
                        $bossid=6;//世界boss-ID号
                        $npcc=$bossid;
                        $inina="boss_".$bossid.".ini";
                        $path='acher/all_boss';
                        $ininame = $path."/".$inina;
                        _unlink($ininame); //删除文件
                        include("./ini/boss_ini.php");

                        //重置防守时间
                        gz06_cz();
                        echo "<font color=black>恭喜你报名成功！请于21:00整前来参加国战</font>"."<br>";
                    } else{
                        echo "<font color=black>对不起！你的国家".$bpmzr."已经报名参与了今天的攻城战无需重复报名</font>"."<br>";
                    }
                } else{
                    echo "<font color=black>对不起！报名参加国战需要国家官员或者君主来报名</font>"."<br>";
                }
            } else{
                echo "<font color=black>你还未加入任何国家！！</font><br>";
            }
        } else{
            echo "<font color=black>你还未加入任何国家！！</font><br>";
        }
    }
}


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";

echo "<font color=black>----------------------</font>"."<br>";
//cmd及超链接值
include("fhgame.php");
