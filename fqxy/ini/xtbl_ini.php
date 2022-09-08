<?php

$xtbl = gz_xtbl(1);
$iniFile = new iniFile('__FAKE_FILE__2', true);
$iniFile->addCategory('国战判断时间', ['月'=>$xtbl['月'],'日'=>$xtbl['日'] ]);

