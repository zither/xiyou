<?php

if($npcc >=1&&$npcc<=100){

include("npcxx01.php");

} elseif($npcc >=101&&$npcc<=200){
include("npcxx02.php");
} elseif($npcc >=201&&$npcc<=300){
include("npcxx03.php");
} elseif($npcc >=301&&$npcc<=400){
include("npcxx04.php");
} elseif($npcc >=401&&$npcc<=500){
include("npcxx05.php");
} elseif($npcc >=501&&$npcc<=600){
include("npcxx06.php");
} elseif($npcc >=601&&$npcc<=700){
include("npcxx07.php");
} elseif($npcc >=701&&$npcc<=800){
include("npcxx08.php");
} elseif($npcc >=801&&$npcc<=900){
include("npcxx09.php");
} elseif($npcc >=901&&$npcc<=1000){
include("npcxx10.php");

} elseif($npcc >=1001&&$npcc<=1100){
include("npcxx11.php");
} elseif($npcc >=1101&&$npcc<=1200){
include("npcxx12.php");
} elseif($npcc >=1201&&$npcc<=1300){
include("npcxx13.php");
} elseif($npcc >=1301&&$npcc<=1400){
include("npcxx14.php");

} elseif($npcc ==5196||$npcc==5197){//主线任务特殊npc

} else{
    $npcsz = include XY_DIR . '/data/npc.php';
    $npcxx = [];
    foreach ($npcsz as $v) {
        if ($npcc == $v['id']) {
            $npcxx = $v;
            break;
        }
    }
    if (!empty($npcxx)) {
        //名字
        $nname= $npcxx['mz'];
        //等级
        $ndj=$npcxx['dj'];
        //HP
        $nhp=$npcxx['hp'];
        //MAXHP
        $nmaxhp=$npcxx['max_hp'];
        //MP
        $nmp=$npcxx['mp'];
        //MAXMP
        $nmaxmp=$npcxx['max_mp'];
        //攻击
        $ngj=$npcxx['gj'];
        //魔攻
        $nmg=$npcxx['mg'];
        //防御
        $nfy=$npcxx['fy'];
        //魔防
        $nmf=$npcxx['mf'];
        //冰攻
        $nbg=$npcxx['bg'];
        //火攻
        $nhg=$npcxx['hg'];
        //雷攻
        $nlg=$npcxx['lg'];
        //冰防
        $nbf=$npcxx['bf'];
        //火防
        $nhf=$npcxx['hf'];
        //雷防
        $nlf=$npcxx['lf'];
        //NPC被攻击说话语
        $ntake=$npcxx['msg'];
    } else {
        echo "<font color=black>没有这个id编号".$npcc."请尝试联系gm解决此问题！！</font><br>";
    }
}















?>



