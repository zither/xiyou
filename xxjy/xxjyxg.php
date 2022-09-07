<?php
include_once __DIR__ . '/../includes/constants.php';
include_once ROOT . '/sql/mysql.php';

session_start();
$message = empty($_SESSION['message']) ? '' : $_SESSION['message'];
$error = empty($_SESSION['error']) ? '' : $_SESSION['error'];
$_SESSION = [];

if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST') {
    try {
        if (empty($_POST['zc1']) || !preg_match('/^[0-9a-zA-Z]{6,}$/', $_POST['zc1'])) {
            throw  new InvalidArgumentException('无效帐号');
        }
        if (empty($_POST['zc2'])) {
            throw  new InvalidArgumentException('无效密码');
        }
        if (empty($_POST['zc3']) || empty($_POST['zc4']) || $_POST['zc3'] !== $_POST['zc4']) {
            throw  new InvalidArgumentException('新密码输入错误');
        }

        $zczh1 = $_POST['zc1'];
        $zczh2 = $_POST['zc2'];
        $zczh3 = $_POST['zc3'];
        $zczh4 = $_POST['zc4'];

        $user = 0;
        $q2 = "o_user_list";
        $sql1 = mysql_query("select uid,username,ma from $q2 where username='$zczh1'");
        $info1 = mysql_fetch_array($sql1);
        if (empty($info1)) {
            throw new InvalidArgumentException('帐户不存在');
        }
        $ma = $info1['ma'];
        $username = $info1['username'];

        $uid = $info1['uid'];
        $wjid = $uid + 10000000;

        $zczh2 = md5($zczh2 . 'ALL_PS');
        if (!hash_equals($zczh2, $ma)) {
            throw new InvalidArgumentException('原密码错误');
        }

        //修改密码
        $pass3 = md5($zczh3 . 'ALL_PS');
        $q2 = "o_user_list";
        $strsql = "update $q2 set password='$pass3',ma='$pass3' where username='$zczh1'";//物品id号必改值
        $result = mysql_query($strsql);

        include("../class/iniclass.php");//调用iniclass文件
        //调用user.ini是否存在
        include("../ini/user_ini.php");
        //修改user缓存
        # 修改一个分类下子项的值(也可以修改多个)
        $iniFile->updItem('验证信息', ['玩家验证' => $pass3]);
        $_SESSION['message'] = '密码修改成功，请重新登录';
        header("location: index.php", true, 302);
        exit;
    } catch (Exception $e) {
        $_SESSION['error'] = $e->getMessage();
        header("location: xxjyxg.php", true, 302);
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
    <title>幻想西游-修改密码</title>
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
        <form  action="xxjyxg.php" method="post">
            登录账号：<input  type="text" name="zc1" placeholder="账号"><br>
            原始密码：<input  type="text" name="zc2" placeholder="原始密码"><br>
            新的密码：<input  type="text" name="zc3" placeholder="新的密码"><br>
            确认密码：<input  type="text" name="zc4" placeholder="确认密码"><br>
            <button>修改密码</button><br>
        </form>
    </div>
    <span>==================</span>
    <br>
    <a href='/xxjy/index.php'><font color=blue>登录游戏</font></a>
    <font color=black>|</font>
    <a href='/xxjy/register.php'><font color=blue>注册账号</font></a>
    <font color=black>|</font>
    <a href='/xxjy/xxjywj.php'><font color=blue>忘记密码</font></a>
    <font color=black>|</font>
    <a href="https://github.com/zither/xiyou">获取代码</a>

    <p>游戏问题请加入QQ群反馈：39387037 </p>

</div>
</body>
</html>
