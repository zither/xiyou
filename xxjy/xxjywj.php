<?php
include_once __DIR__ . '/../includes/constants.php';
include_once ROOT . '/sql/mysql.php';

session_start();
$message = empty($_SESSION['message']) ? '' : $_SESSION['message'];
$error = empty($_SESSION['error']) ? '' : $_SESSION['error'];
$_SESSION = [];
$db = DB::instance();

if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST') {
    try {
        if (empty($_POST['zc1']) || !preg_match('/^[0-9a-zA-Z]{6,}$/', $_POST['zc1'])) {
            throw  new InvalidArgumentException('无效帐号');
        }
        if (empty($_POST['zc2']) || empty($_POST['zc3']) || $_POST['zc2'] !== $_POST['zc3']) {
            throw  new InvalidArgumentException('新密码输入错误');
        }
        if (empty($_POST['zc4']) || !preg_match('/^[0-9a-zA-Z]{6,}$/', $_POST['zc4'])) {
            throw  new InvalidArgumentException('无效安全码');
        }

        $zczh1 = $_POST['zc1'];
        $zczh2 = $_POST['zc2'];
        $zczh3 = $_POST['zc3'];
        $zczh4 = $_POST['zc4'];

        $info1 = $db->get('o_user_list', '*', ['username' => $zczh1]);
        if (empty($info1)) {
            throw new InvalidArgumentException('帐号不存在');
        }

        $pass1=$info1['aqm'];
        $uid=$info1['uid'];
        $wjid=$uid+10000000;

        $zczh4=md5($zczh4.'ALL_PS');
        if (!hash_equals($zczh4, $pass1)) {
            throw new InvalidArgumentException('帐号或安全码错误');
        }

        $pass3=md5($zczh3.'ALL_PS');
        $db->update('o_user_list', ['password' => $pass3, 'ma' => ''], ['uid' => $uid]);
        $_SESSION['message'] = '密码找回成功，请重新登录';
        header("location: index.php", true, 302);
        exit;
    } catch (Exception $e) {
        $_SESSION['error'] = $e->getMessage();
        header("location: xxjywj.php", true, 302);
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="zh">
<head>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>幻想西游-忘记密码</title>
    <link rel="shortcut icon" href="pic/ico/favicon.ico"/>
</head>
<body>
<div style='width: device-width;display:block;word-break: break-all;word-wrap: break-word;'>
    <img src="/fqxy/pic/login/1.jpg" alt="图片"/>
    <p>古典神话网游，持神兵利器，降五爪金龙，携爱行走西游路……</p>
    <?php if ($error):?>
        <span style="color: red"><?php echo $error;?></span></br>
    <?php endif;?>
    <?php if ($message):?>
        <span style="color: green"><?php echo $message;?></span></br>
    <?php endif;?>
    <span>==================</span>
    <div >
        <form  action="xxjywj.php" method="post">
            登录账号：<input type="text" name="zc1" placeholder="账号"><br>
            新的密码：<input type="text" name="zc2" placeholder="设置新密码"><br>
            确认密码：<input type="text" name="zc3" placeholder="确认新密码"><br>
            安全码　：<input type="text" name="zc4" placeholder="注册时的安全码"><br>
            <button>设置密码</button><br>
        </form>
    </div>
    <span>==================</span>
    <br>
    <a href='/xxjy/index.php'><font color=blue>登录游戏</font></a>
    <font color=black>|</font>
    <a href='/xxjy/register.php'><font color=blue>注册账号</font></a>
    <font color=black>|</font>
    <a href='/xxjy/xxjyxg.php'><font color=blue>修改密码</font></a>
    <font color=black>|</font>
    <a href="https://github.com/zither/xiyou">获取代码</a>

    <p>游戏问题请加入QQ群反馈：39387037 </p>

</div>
</body>
</html>
