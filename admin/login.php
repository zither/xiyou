<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <title>幻想西游管理平台-登录</title>
    <link rel="icon" href="../img/favicon.png" type="image/x-icon" />
    <style>

    </style>
</head>
<body>

<?php
include_once __DIR__ . '/../includes/constants.php';
$configs = include JY_CONFIG_DIR . '/config.php';

$user=0;
$zcxx = '';
error_reporting(E_ALL & ~E_NOTICE);
try {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (empty($_POST['username']) || !preg_match('/^[a-zA-Z0-9]+$/', $_POST['username'])){
            throw new InvalidArgumentException('无效帐号');
        }
        $username = $_POST['username'];

        if (empty($_POST['password'])) {
            throw new InvalidArgumentException('无效密码');
        }
        $password = $_POST['password'];

        //连接数据库
        include("../sql/mysql.php");//调用数据库连接
        $sql = mysql_query("select uid,password,name from gmuser where username='$username'", $conn);
        $info1 = mysql_fetch_array($sql);
        if (empty($info1)) {
            throw new InvalidArgumentException('帐号不存在');
        }

        $pass1 = $info1['password'];
        $uid = $info1['uid'];
        $pass = md5($password . 'ALL_PS');
        $name = $info1['name'];

        if (!hash_equals($pass, $pass1)) {
            throw new InvalidArgumentException('用户名或密码错误');
        }
        //玩家ini
        $wjid = $uid + 10000000;
        //写入本地ini缓存
        include("../class/iniclass.php");//调用iniclass文件
        //调用user.ini是否存在
        include("../ini/user2_ini.php");
        //成功登录游戏
        //拼接网址
        $xxjyurl = $configs['jy_url'];
        $xyurl = $xxjyurl . "/admin/index.php?wjid=$wjid&pass=$pass1";
        echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=$xyurl'>";
    }
} catch (InvalidArgumentException $e) {
    $zcxx = sprintf('<span style="color: red">%s</span>', $e->getMessage());
}
?>

<div>
    <?php echo $zcxx;?><br>
    请输入管理员账号和密码
</div>
<div>
    <form  action="login.php" method="POST">
        账号：<input  type="text" name="username" placeholder="请输入管理员账号"id='search'><br>
        密码：<input  type="password" name="password" placeholder="请输入管理员密码"id='search'><br>
        <input  type="submit" name="submit" value="登录"  id="search1" ><br>
    </form>
</div>

<div style="min-height: 80px;">
</div>
</body>
</html>
