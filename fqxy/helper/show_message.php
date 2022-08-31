<?php

include_once __DIR__ . '/../../config/Common.php';

function show_message($message)
{
    $suffix = config_item('jy_enable_https') ? 's' : '';
    $host = config_item('host');
    echo $message . "<br>";
    echo "<a href='http$suffix://$host'>返回首页</a>";
    exit;
}
