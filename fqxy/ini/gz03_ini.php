<?php

$iniFile = new iniFile('__GZ03__', true);

$gz03_arr = gz03();
foreach ($gz03_arr as $row) {
    $iniFile->addItem('id', [$row['gjid']=>$row['gjid']]);
    $iniFile->addItem('国家名字', [$row['gjid']=>$row['gjmz']]);
    $iniFile->addItem('君主名字', [$row['gjid']=>$row['jzmz']]);
    $iniFile->addItem('君主id', [$row['gjid']=>$row['jzid']]);
    $iniFile->addItem('国家周积分', [$row['gjid']=>$row['zjf']]);
    $iniFile->addItem('国家日积分', [$row['gjid']=>$row['rjf']]);
    $iniFile->addItem('周领取', [$row['gjid']=>$row['zlq']]);
    $iniFile->addItem('日领取', [$row['gjid']=>$row['rlq']]);
    $iniFile->addItem('参加时间', [$row['gjid']=>$row['cjsj']]);
}
