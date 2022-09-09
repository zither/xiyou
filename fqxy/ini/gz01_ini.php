<?php

$iniFile = new iniFile('__FAKE_FILE__', true);
$db = DB::instance();
$gz01_arr = $db->select('gz01', '*');

foreach ($gz01_arr as $row) {
    $iniFile->addItem('id', [$row['zcid']=>$row['zlgj']]);
    $iniFile->addItem('国家名字', [$row['zcid']=>$row['zlgj']]);
    $iniFile->addItem('国家id', [$row['zcid']=>$row['zlgjid']]);
    $iniFile->addItem('君主名字', [$row['zcid']=>$row['gjjz']]);
    $iniFile->addItem('君主id', [$row['zcid']=>$row['gjjzid']]);
    $iniFile->addItem('夺仗人', [$row['zcid']=>$row['czz']]);
    $iniFile->addItem('夺仗人id', [$row['zcid']=>$row['czzid']]);
    $iniFile->addItem('占领时间', [$row['zcid']=>$row['zlsj']]);
}
