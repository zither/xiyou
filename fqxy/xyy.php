<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>幻想西游</title>
</head>
<body>
<div style='width: device-width;display:block;word-break: break-all;word-wrap: break-word;'>


<?php
    ini_set("error_reporting", "E_ALL & ~E_NOTICE");//防止报错代码
    date_default_timezone_set("PRC");
    //安全备份
    //系统维护10分钟,11:50以后
    //include("aqbf.php");
    //接收账号密码查询

    error_reporting(E_ALL & ~E_NOTICE);
    $wjid = $_GET['wjid'];
    $password = $_GET['pass'];
    $qy = $_GET['qy'];

if ($wjid != "" && $password != "" && $qy != "") {
    //逻辑非常绕，先通过远程请求验证帐号有效性，然后在后台使用对应帐号请求对应页面，再返回页面内容
    //验证家园社区id的合法性
    include("./sql/xxjyCurl.php");//向小轩家园总站发送数据验证
    //验证成功或者失败代码在fqxy/sql/yxCurl.php
} else {
    //重新登录
    include("xxjyindex.php");
}
?>

</div>

</body>
</html>
