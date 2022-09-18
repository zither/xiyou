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
    include_once __DIR__ . '/../includes/constants.php';
    $configs = include JY_CONFIG_DIR . '/config.php';
    error_reporting(E_ALL & ~E_NOTICE);

    session_start();
    if (empty($_SESSION['admin'])) {
        header('location: login.php', true, 302);
        exit;
    }

    $xxjyurl = $configs['jy_url'];
    echo "<font color=red>【请选择你需要要操作项目】</font>"."<br>";
    echo "<a href=".$xxjyurl."/admin/gm02.php><font color=blue>【提取注册码】</font></a>"."<br>";
    echo "<a href=".$xxjyurl."/admin/index.php><font color=blue>返回GM管理平台</font></a>"."<br>";

    ?>
</div>

</body>
</html>




