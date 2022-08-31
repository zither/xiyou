<?php

//游戏访问地址
$config['host'] = '81.68.206.179:81';
//游戏访问地址是否开启了 HTTPS
$config['yx_enable_https'] = true;
//游戏家园地址是否开启了 HTTPS
$config['jy_enable_https'] = true;

$config['urls'] = [
    [
        'host' => '81.68.206.179:81', // 访问地址
        'name' => '傲来国（2022-08-20）', // 分区名字
        'status' => 1, // 运行状态，1正常，0关闭
        'https_suffix' => '', // https后缀，开启https的话设置为s，否则为空
    ],
    [
        'host' => '81.68.206.179',
        'name' => '长安城',
        'status' => 0,
        'https_suffix' => '',
    ],
];

