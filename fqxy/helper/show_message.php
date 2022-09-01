<?php

function show_message($message)
{
    $configs = include XY_CONFIG_DIR . '/config.php';
    $host = $configs['jy_url'];
    echo $message . "<br>";
    echo "<a href='$host'>返回首页</a>";
    exit;
}
