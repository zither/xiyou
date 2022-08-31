<?php
///////////////////////////////////游戏失效页面//////////////////////////////////////////
//echo "<font color=black>当前登录信息已失效请重新</font>"."<a href='xxjyindex.php'><font color=blue>登录</font></a>"."<br>";

$suffix = config_item('jy_enable_https') ? 's' : '';
$host = config_item('host');
echo "登录信息已失效，请重新登录<br>";
echo "<a href='http$suffix://$host'>返回首页</a>";
exit;

