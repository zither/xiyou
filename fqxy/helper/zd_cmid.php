<?php

function zd_cmid($wjid, $cmid = null) {
    if ((int)$wjid <= 0 ) {
        echo "无效玩家编号 #1";
        exit;
    }
    include("./ini/npc_ini.php");
    if (!is_null($cmid)) {
        $iniFile->updItem('怪物2号属性', ['初始' => $cmid]);
        return $cmid;
    }
    return $iniFile->getItem('怪物2号属性','初始');
}

