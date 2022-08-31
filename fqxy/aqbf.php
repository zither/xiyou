<?php
$h = date('H') * 1;
$i = date('i') * 1;
$wjid = $_GET['uid'];

if ($wjid == 10000001) {

} else {
    if ($h >= 23 && $i >= 50) {
        $suffix = config_item('jy_enable_https') ? 's' : '';
        $host = config_item('host');
        echo "安全备份中，稍后开放<br>";
        echo "<a href='http$suffix://$host'>返回首页</a>";
        exit;
    }
}

