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

    $uid = $_GET['uid'] ?? null;
    $password = $_GET['password'] ?? null;
    if (!$uid || !$password) {
        $uid = $_SESSION['admin'];
        $password = $_SESSION['admin_password'];
    }

    $xxjyurl = $configs['jy_url'];
    echo "<font color=red>【请选择你需要要管理的项目】</font>"."<br>";
    echo "<a href=".$xxjyurl."/admin/gm01.php><font color=blue>社区管理（总站）</font></a>"."<br>";
    echo "<br>";
    foreach ($configs['urls'] as $i => $v) {
        if ($v['status'] == 0) {
            continue;
        }
        echo "<a href=" . $v['url'] . "/fqxy/gm.php?uid=$uid&password=$password&gid=1><font color=blue>" . ($i + 1) . ".{$v['name']}</font></a>" . "<br>";
        echo "<br>";
    }
    ?>
</div>

</body>
</html>




