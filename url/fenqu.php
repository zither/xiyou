<?php

include_once(__DIR__ . '/../config/Common.php');

// 1为本地服务器，2为线上服务器
$local = 1;

$local_urls = [
    [
        'host' => config_item('host'), // 访问地址
        'name' => '傲来国（2022-08-20）', // 分区名字
        'status' => 1, // 运行状态，1正常，0关闭
        'https_suffix' => 's', // https后缀，开启https的话设置为s，否则为空
    ]
];
$urls = [
    [
        'host' => config_item('host'),
        'name' => '新区【傲来国】',
        'status' => 1,
        'https_suffix' => 's',
    ],
];

return $local == 1 ? $local_urls : $urls;
