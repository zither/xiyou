<?php

ini_set("error_reporting", "E_ALL & ~E_NOTICE");//防止报错代码
date_default_timezone_set("PRC");

$configs = include XY_CONFIG_DIR . '/config.php';

$url = $configs['xy_url'];
//准备好要发送给服务器的数据
$post_data = $wjid . '|' . $password . '|' . $url . '|' . $qy;

//初始化 curl
$ch = curl_init();
//将玩家id和md5值传送给服务器验证防止人为修改
curl_setopt($ch, CURLOPT_URL, $configs['jy_url'] . '/sql/xxjyCurl.php');
//这里设置成 post 方式
curl_setopt($ch, CURLOPT_POST, 1);
//这里添加需要 post 的数据
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

//开始请求服务器
$response = curl_exec($ch);

//打印服务器返回的数据
curl_close($ch);