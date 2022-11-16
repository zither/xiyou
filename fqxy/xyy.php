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
    include_once __DIR__ . '/../includes/constants.php';
    include_once ROOT . '/includes/functions.php';
    include_once XY_DIR . '/class/iniclass.php';
    include XY_DIR . '/sql/mysql.php';
    date_default_timezone_set("PRC");
    $configs = include XY_CONFIG_DIR . '/config.php';

    //安全备份
    //系统维护10分钟,11:50以后
    //include("aqbf.php");
    //接收账号密码查询

    $uid = $_GET['uid'] ?? null;
    $token = $_GET['token'] ?? null;
    $qy = $_GET['qy'] ?? null;

    try {
        if (empty($uid) || empty($token) || empty($qy)) {
            throw new Exception('登录信息错误');
        }

        //验证家园社区id的合法性
        $response = 1;
        //向家园总站发送数据验证
        include XY_DIR . '/sql/xxjyCurl.php';
        if ($response != 2) {
            throw new Exception('帐号验证失败');
        }

        $sqid = ($uid + 10000000) . "_" . $qy;
        $fquid = DB::instance()->get('o_user_list', 'uid', ['sqid' => $sqid]);

        // 帐号不存在，直接生成对应帐号
        if (empty($fquid)) {
            include XY_DIR . '/xxsql/xxsql.php';
        }
        // 再次检查
        if (empty($fquid)) {
            throw new RuntimeException('帐号信息初始化失败');
        }
        // 检查分区wjid
        if (empty($wjid)) {
            $wjid = $fquid + 10000000;
        }
        include XY_DIR . '/ini/xuser_ini.php';
        $a10 = ($iniFile->getItem('验证信息', '玩家游戏码'));
        $img = 'pic/login/1.jpg';
        echo '<img src="' . $img . ' "alt="图片"/>';
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<font color=black>---------------------------</font>" . "<br>";
        echo "<font color=black>请将此页面存为书签,方便下次访问</font>" . "<br>";
        echo "<font color=red>特别提示:为了你的账号安全请不要将书签发给任何人,如有遗失后果自负</font>" . "<br>";
        echo "<font color=black>---------------------------</font>" . "<br>";
        echo "<br>";
        echo "<a href='./xy.php?uid=$wjid&cmd=0&sid=$a10'><font color=blue>【开启游戏之旅】</font></a>" . "<br>";

        session_start();
        $_SESSION['uid'] = $wjid;
        $_SESSION['sid'] = $a10;
        $lifetime = 60 * 60 * 24 * 365 * 10;
        setcookie(session_name(),session_id(),time()+$lifetime);
    } catch (Exception $e) {
        header("Location: {$configs['jy_url']}", true, 302);
        exit;
    }
    ?>
</div>
</body>
</html>
