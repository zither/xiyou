<?php

//放置NPC

//当前坐标
$dtx = $dtx ?? 0;
$dty = $dty ?? 1;

//组合坐标
$zb = sprintf('%d_%d', $dtx, $dty);
$mapnpc = include XY_DIR . '/map/mapnpc.php';
if (!empty($mapnpc[$zb])) {
    $npcsz = include XY_DIR . '/data/npc.php';
    $ids = $mapnpc[$zb];
    foreach ($ids as $v) {
        $xx = [];
        foreach ($npcsz as $n) {
            if ($v == $n['id']) {
                $xx = $n;
                break;
            }
        }
        if (empty($xx)) {
            break;
        }
        echo npc_ts($wjid, $xx['id']);
        $cmid=$cmid+1;
        $cdid[]=$cmid;
        $clj[]=7;
        $npc[]=$xx['id'];
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>{$xx['mz']}</font></a><br>";
    }
}
