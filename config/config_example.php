<?php

//家园地址
$config['jy_url'] = 'http://127.0.0.1';

//分区列表
$config['urls'] = [
    [
        'qy' => 1, //分区编号
        'url' => 'http://127.0.0.1', // 访问地址
        'name' => '傲来国（2022-08-20）', // 分区名字
        'status' => 1, // 运行状态，1正常，0关闭
    ],
    [
        'qy' => 2,
        'url' => 'http://192.168.0.21',
        'name' => '长安城',
        'status' => 0, // 无效分区示例，请勿修改
    ],
];

//家园数据库配置
$config['mysql'] = [
    'host' => 'localhost',
    'user' => 'root',
    'password' => 'root',
    'database' =>'xxjyuser',
];

//是否开启调试信息
$config['debug'] = false;

return $config;