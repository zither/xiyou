<?php


$iniFile = new iniFile('__JDJC_INI__', true);

$iniFile->addItem('排行榜名字',['初始' => 123]);
$iniFile->addItem('排行榜值1',['初始' => 0]);
$iniFile->addItem('排行榜值2',['初始' => 0]);
$iniFile->addItem('排行榜值3',['初始' => 0]);
$iniFile->addItem('排行榜值4',['初始' => 0]);
$iniFile->addItem('排行榜值5',['初始' => 0]);
$iniFile->addItem('排行榜值6',['初始' => 0]);

$db = DB::instance();
$jc_arr = $db->select('all_jdjc', '*');
foreach ($jc_arr as $row) {
    $iniFile->addCategory('排行榜名字', [$row['id']=> $row['wjmz']]);
    $iniFile->addCategory('排行榜值1', [$row['id']=> $row['wjid']]);
    $iniFile->addCategory('排行榜值2', [$row['id']=> $row['jcjg']]);
    $iniFile->addCategory('排行榜值3', [$row['id']=> $row['vip']]);
    $iniFile->addCategory('排行榜值4', [$row['id']=> $row['id']]);
    $iniFile->addCategory('排行榜值5', [$row['id']=> $row['cq']]);
    $iniFile->addCategory('排行榜值6', [$row['id']=> $row['timex']]);
}
