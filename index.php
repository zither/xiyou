<?php

include_once __DIR__ . '/includes/constants.php';

$jy_config_path = JY_CONFIG_DIR . '/config.php';
$jy_mysql_path = ROOT . '/sql/mysql.php';
$xy_config_path = XY_CONFIG_DIR . '/config.php';
$xy_mysql_path = XY_DIR . '/sql/mysql.php';

if (!file_exists($jy_config_path)) {
    echo "家园配置文件未找到，请按照安装说明创建配置文件：<a href='https://github.com/zither/xiyou/blob/master/README.md'>README.md</a>";
    exit;
}

if (!file_exists($jy_mysql_path)) {
    echo "家园数据库配置文件未找到，请按照安装说明创建配置文件：<a href='https://github.com/zither/xiyou/blob/master/README.md'>README.md</a>";
    exit;
}

if (!file_exists($xy_config_path)) {
    echo "分区配置文件未找到，请按照安装说明创建配置文件：<a href='https://github.com/zither/xiyou/blob/master/README.md'>README.md</a>";
    exit;
}

if (!file_exists($xy_mysql_path)) {
    echo "分区数据库配置文件未找到，请按照安装说明创建配置文件：<a href='https://github.com/zither/xiyou/blob/master/README.md'>README.md</a>";
    exit;
}

$configs = include $jy_config_path;
$jy_url = $configs['jy_url'] . "/xxjy/index.php";

header("location: $jy_url", true, 302);
exit;