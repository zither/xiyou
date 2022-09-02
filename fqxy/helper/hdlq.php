<?php

/**
 * 普通活动物品领取
 *
 * @param int $wjid
 * @param int $npcc
 * @param array $wp
 * @param int $cs
 */
function hdlq(int $wjid, int $npcc, array $wp, int $cs = 1)
{
    include(XY_DIR . "/sql/mysql.php");
    include(XY_DIR  . "/ini/hd_ini.php");
    $hdtime = ($iniFile->getItem('活动时间', $npcc));
    $hdcs = ($iniFile->getItem('活动次数', $npcc)) ?? 0;
    if ($hdtime == "" ) {
        include(XY_DIR . "/yxpz/hd_pz.php");
        include(XY_DIR . "/ini/hd_ini.php");
        $hdtime = ($iniFile->getItem('活动时间', $npcc));
    }
    $nowtime = date('Y-m-d H:i:s');
    $hdtime1 = substr($hdtime, 0, 10);
    $nowtime1 = substr($nowtime, 0, 10);

    if ($hdtime1 == $nowtime1 && $hdcs >= $cs) {
        echo "<span style='color: red'>今日活动参与次数已达上限。</span><br>";
        return false;
    }

    $q2 = "hd";
    //活动当前次数
    $hdcs = $hdcs + 1;
    $strsql = "update $q2 set hdtime='$nowtime', hdcs = '$hdcs' where wjid=$wjid and hdid=$npcc";
    $result = mysql_query($strsql);
    include(XY_DIR . "/ini/hd_ini.php");
    $iniFile->updItem('活动时间', [$npcc => $nowtime]);
    $iniFile->updItem('活动次数', [$npcc => $hdcs]);

    $wpdz1 = $wpdz2 = $wpdz3 = $wpdz4 = $wpdz5 = [];
    foreach ($wp as $v) {
        $wpdz1[] = $v['mz'];//名字
        $wpdz2[] = $v['fl'];//物品分类
        $wpdz3[] = $v['id'];//物品id
        $wpdz4[] = $v['sl'];//数量
        $wpdz5[] = $v['zl'];//重量
    }
    //得到物品
    include(XY_DIR . "/rwmap/rwget.php");

    return true;
}
