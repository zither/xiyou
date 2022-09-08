<?php

$gz06 = gz06();
$iniFile = new iniFile('__FAKE_FILE__3', true);
$iniFile->addItem('防守时间',['初始' => $gz06['fssj']]);
$iniFile->addItem('防守国家',['初始' => $gz06['fsgj']]);
$iniFile->addItem('防守国家id',['初始' => $gz06['fsgjid']]);
