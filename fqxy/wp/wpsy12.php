<?php

if($npcc ==1107) {
    include("./ini/jn_ini.php");
    $inina = "jn.ini";
    $path = 'ache/' . $wjid;
    $ininame = $path . "/" . $inina;
    $iniFile = new iniFile($ininame);
    $jnid = 4;
    $jnidd = $jnid;
    include XY_DIR . '/helper/jn.php';
    $ujnid = ($iniFile->getItem('技能名字', $jnid));
    if ($ujnid == $jnmz) {
        $wpsy = 1;
        echo "<font color=black>你已经学会了{$jnmz}无需再学习！！</font>" . "<br>";
    } else {
        $q2 = "jnn";
        $sql = "insert into $q2 (wjid,jnid,jndj)  values($wjid,$jnid,'1')";
        if (!mysql_query($sql, $conn)) {
            die('Error: ' . mysql_error());
        }
        $inina = "jn.ini";
        $path = 'ache/' . $wjid;
        $ininame = $path . "/" . $inina;
        _unlink($ininame);
        $wpsy = 2;//使用成功
        echo "<font color=black>恭喜你学会了{$jnmz}技能！！</font>" . "<br>";
    }
} else if ($npcc == 1108) {
    do {
        include XY_DIR . '/ini/zt_ini.php';
        $mpid = $iniFile->getItem('玩家信息', '门派');
        //检查门派是否将军府
        if ($mpid != 1) {
            $wpsy = 1;
            echo "<font color=black>只有将军府的弟子才能学习霸王枪！</font>" . "<br>";
            break;
        }
        include("./ini/jn_ini.php");
        $inina = "jn.ini";
        $path = 'ache/' . $wjid;
        $ininame = $path . "/" . $inina;
        $iniFile = new iniFile($ininame);
        $jnid = 6;
        $jnidd = $jnid;
        include XY_DIR . '/helper/jn.php';
        $ujnid = ($iniFile->getItem('技能名字', $jnid));
        if ($ujnid == $jnmz) {
            $wpsy = 1;
            echo "<font color=black>你已经学会了{$jnmz}无需再学习！！</font>" . "<br>";
        } else {
            $q2 = "jnn";
            $sql = "insert into $q2 (wjid,jnid,jndj)  values($wjid,$jnid,'1')";
            if (!mysql_query($sql, $conn)) {
                die('Error: ' . mysql_error());
            }
            $inina = "jn.ini";
            $path = 'ache/' . $wjid;
            $ininame = $path . "/" . $inina;
            _unlink($ininame);
            $wpsy = 2;//使用成功
            echo "<font color=black>恭喜你学会了{$jnmz}技能！！</font>" . "<br>";
        }
    } while (0);
} else{
    $wpsy=1;//使用失败
    include("wpsyts.php");

}
