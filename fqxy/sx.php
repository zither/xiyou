<?php

$suffix = config_item('jy_enable_https') ? 's' : '';
$host = config_item('host');
echo "登录信息已失效，请重新登录<br>";
echo "<a href='http$suffix://$host'>返回首页</a>";
exit;

