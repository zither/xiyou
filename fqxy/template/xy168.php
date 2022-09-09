<?php


//阻塞代码防止出现脏数据//自己的id锁
$ininalock=$wjid."_lock".".txt";
include(XY_DIR . "/ini/zsini.php");
$wjid1=$wjid;
$wjid=$npcc;

$ininalock2=$wjid."_lock".".txt";//对方的id锁
include(XY_DIR . "/ini/ozsini.php");

$wjid=$wjid1;

if($zsspd==1&&$zsspd2==1){
    include(XY_DIR . "/ini/bl2_ini.php");
    $ltpx=($iniFile->getItem('玩家排序1',$npcc));
    $ltwjid=($iniFile->getItem('玩家id',$ltpx));
    $ckname=($iniFile->getItem('玩家名字',$ltpx));
    $ckvip=($iniFile->getItem('玩家vip',$ltpx));

    $ltpxx=$ltwjid."_".$ltpx;
    $iniFile->delItem('玩家排序', $ltpxx);
    $iniFile->delItem('玩家排序1', $ltwjid);
    $iniFile->delItem('玩家id', $ltpx);
    $iniFile->delItem('玩家vip', $ltpx);
    $iniFile->delItem('玩家名字', $ltpx);

    include(XY_DIR . "/ini/zt_ini.php");
    $ltbl1=($iniFile->getItem('玩家信息','玩家名字'));
    $ltbl2=($iniFile->getItem('玩家信息','vip等级'));
    $wjid=$npcc;
    include(XY_DIR . "/ini/zt_ini.php");
    $fzfl=($iniFile->getItem('玩家信息','住宅分类'));
    if($fzfl==1){
        $dtx1=71;
        $dty1=0;
    } elseif($fzfl==2){

        $dtx1=72;
        $dty1=0;
    } elseif($fzfl==3){
        $dtx1=73;
        $dty1=0;
    } else{
        $fzfl=999;
    }
    if($fzfl!=999){
        $wjid=$npcc;
        //调用msg.ini是否存在
        $wjtake="同意了你房屋邀请！！来到你的房屋！！";
        include(XY_DIR . "/ini/msg_ini.php");
        $inina="msg.ini";
        $path='ache/'.$wjid;
        $ininame = $path."/".$inina;
        $iniFile = new iniFile($ininame);
        $hkeyltpx1[]="";
        $hltpx1="";
        $arr3="";
        $hltpx1=($iniFile->getCategory('玩家排序'));
        foreach(array_keys($hltpx1) as $key){
            $hkeyltpx1[]=$hltpx1[$key];
        }

        $tmp1="排序";
        $arr3=$hkeyltpx1;
        foreach( $arr3 as $k=>$v) {
            if($tmp1 == $v) unset($arr3[$k]);
        }

        $ltmax1=empty($arr3) ? 0 : (int)max($arr3);
        if($ltmax1=="排序"){
            $ltmax1=0;
        }

    }

    $yqbl=123;

    include(XY_DIR . "/template/xy002.php");
    include(XY_DIR . "/pz/pz01.php");
}

//解锁当前使用的ini
include("./ini/ojsini.php");
//解锁当前使用的ini

