<?php

$arr = gz05();
$iniFile = new iniFile('__FAKE_FILE__1', true);
foreach ($arr as $v) {
    $iniFile->addCategory('国战判断时间', [$v['id']=>$v['gztime']]);
}

