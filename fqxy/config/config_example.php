<?php

//分区所属家园地址
$config['jy_url'] = 'http://127.0.0.1';

//分区地址
$config['xy_url'] = 'http://127.0.0.1';

//分区数据库配置
$config['mysql'] = [
    'host' => 'localhost',
    'user' => 'root',
    'password' => 'root',
    'database' =>'xyy',
];

//是否开启调试信息
$config['debug'] = false;

//是否开启地图编辑，请勿打开此选项，后果自负！！
$config['edit_map'] = false;

return $config;
