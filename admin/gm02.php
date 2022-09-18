<!DOCTYPE html>
<html lang="zh">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>幻想西游GM管理平台</title>
</head>
<body>

<div style='width: device-width;display:block;word-break: break-all;word-wrap: break-word;'>
    <?php
    error_reporting(E_ALL & ~E_NOTICE);

    session_start();
    if (empty($_SESSION['admin'])) {
        header('location: login.php', true, 302);
        exit;
    }

    include_once __DIR__ . '/../includes/constants.php';
    include_once ROOT . '/includes/functions.php';
    include(ROOT . "/sql/mysql.php");//调用数据库连接
    $configs = include JY_CONFIG_DIR . '/config.php';
    $xxjyurl = $configs['jy_url'];

    //随机产生一个玩家的特征码写入数据库验证网址信息
    $a1=str_rand(35);
    $a2="【幻想西游注册码】[".$a1."]";
    //获取最大值
    $q2="zem";
    $sql1=mysql_query("select MAX(id) from $q2");
    $abc=mysql_fetch_array($sql1);
    $maxid=$abc[0];
    if($maxid ==""){
        $maxid=0;
        $maxidd=$maxid+1;
    } else{
        $maxidd=$maxid+1;
    }
    $q2="zem";
    $sql = "insert into $q2 (id,zem,sy)  values('$maxidd','$a2','1')";
    if (!mysql_query($sql)) {
        die('Error: ' . mysql_error());
    }
    echo "<font color=black>【注册码】</font>"."<br>";
    echo "<font color=red>恭喜你成功提取到一条注册码</font>"."<br>";
    echo "<font color=red>请复制以下注册码进行注册:</font>"."<br>";
    echo "<font color=black>$a2</font>"."<br>";
    echo "<br>";
    echo "<font color=black>---------------------</font>"."<br>";
    echo "<a href=".$xxjyurl."/admin/index.php><font color=blue>返回GM管理平台</font></a>"."<br>";
    ?>
</div>

</body>
</html>




