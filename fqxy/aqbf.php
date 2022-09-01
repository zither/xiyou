<?php
$h = date('H') * 1;
$i = date('i') * 1;
$wjid = $_GET['uid'];

if ($wjid == 10000001) {

} else {
    if ($h >= 23 && $i >= 50) {
        $host = $configs['jy_url'];
        echo "安全备份中，稍后开放<br>";
        echo "<a href='$host'>返回首页</a>";
        exit;
    }
}

