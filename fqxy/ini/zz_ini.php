<?php

$iniFile = new iniFile('__ZZ_INI__', true);
$db = DB::instance();
$info1 = $db->select('zz', '*', ['wjid' => $wjid]);
if (empty($info1)) {
    $t = $db->insert('zz', [
        'wjid' => $wjid,
        'zzdj' => 1,
        'zztime' => date('Y-m-d H:i:s'),
        'sftime' => date('Y-m-d H:i:s',strtotime('+999 day')),
        'shtime' => date('Y-m-d H:i:s',strtotime('+999 day')),
    ]);
    $info1 = $db->select('zz', '*', ['wjid' => $wjid]);
}

foreach ($info1 as $row) {
    $iniFile->addCategory('编号id', [$row['id']=> $row['id']]);
    $iniFile->addCategory('种植等级', [$row['id']=> $row['zzdj']]);
    $iniFile->addCategory('种植名字', [$row['id']=> $row['zzwpmz']]);
    $iniFile->addCategory('种植物品', [$row['id']=> $row['zzwpid']]);
    $iniFile->addCategory('种植数量', [$row['id']=> $row['zzwpid']]);
    $iniFile->addCategory('种植时间', [$row['id']=> $row['zztime']]);
    $iniFile->addCategory('施肥时间', [$row['id']=> $row['sftime']]);
    $iniFile->addCategory('收获时间', [$row['id']=> $row['shtime']]);
}
