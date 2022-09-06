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
    date_default_timezone_set("PRC");
    $configs = include XY_CONFIG_DIR . '/config.php';

    //安全备份
    //系统维护10分钟,11:50以后
    //include("aqbf.php");
    //接收账号密码查询

    $wjid = $_GET['wjid'];
    $password = $_GET['pass'];
    $qy = $_GET['qy'];

    try {
        if (empty($wjid) || empty($password) || empty($qy)) {
            throw new Exception('登录信息错误');
        }
        //逻辑非常绕，先通过远程请求验证帐号有效性，然后在后台使用对应帐号请求对应页面，再返回页面内容
        //验证家园社区id的合法性
        $response = 1;
        //向小轩家园总站发送数据验证
        include XY_DIR . '/sql/xxjyCurl.php';
        if ($response != 2) {
            throw new Exception('帐号验证失败');
        }

        $yxhe = $response;
        $xxjy_pass = $password;
        $xxjy_qy = $qy;

        //生成社区玩家在此游戏的id和验证
        include XY_DIR . '/class/iniclass.php';
        $hf = 1;
        //o_user_list中查询是否存在，返回是否合法，合法2，不合法1
        include XY_DIR . '/ini/yxuser_ini.php';
        //社区验证游戏
        //验证成功是合法的信息
        $pass = '';
        if ($hf == 2) {
            $pass = ($iniFile->getItem('验证信息', '玩家验证'));
        }

        if ($pass == $xxjy_pass && $xxjy_pass != "" && $pass != "") {
            //存在用户的信息
            $wjid = $wjini;
            include XY_DIR . '/ini/xuser_ini.php';

            # 获取一个分类下某个子项的值
            $uwjid = ($iniFile->getItem('验证信息', '玩家id'));
            $a10 = ($iniFile->getItem('验证信息', '玩家游戏码'));

            $img = 'pic/login/1.jpg';
            echo '<img src="' . $img . ' "alt="图片"/〉';
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<font color=black>---------------------------</font>" . "<br>";
            echo "<font color=black>请将此页面存为书签,方便下次访问</font>" . "<br>";
            echo "<font color=red>特别提示:为了你的账号安全请不要将书签发给任何人,如有遗失后果自负</font>" . "<br>";
            echo "<font color=black>---------------------------</font>" . "<br>";
            echo "<br>";
            echo "<a href='./xy.php?uid=$wjini&cmd=0&sid=$a10'><font color=blue>【开启游戏之旅】</font></a>" . "<br>";

            session_start();
            $_SESSION['uid'] = $wjini;
            $_SESSION['sid'] = $a10;
            $lifetime = 60 * 60 * 24 * 365 * 10;
            setcookie(session_name(),session_id(),time()+$lifetime);
        } else {
            //不存在用户的信息
            //检测uid是否存在如果存在整么社区号修改过密码需要重新更新游戏数据
            if ($uid != "") {
                //更改密码后的操作
                include XY_DIR . '/sql/mysql.php';
                $q2 = "o_user_list";
                $strsql = "update $q2 set password='$xxjy_pass' where sqid='$sqid'";//物品id号必改值
                $result = mysql_query($strsql);

                $inina = "yxuser.ini";
                $path =  XY_DIR  .'/ache/' . $wjini;
                $ininame = $path . "/" . $inina;
                _unlink($ininame);
                $iniFile = new iniFile($ininame);
                //检测uid是否存在如果存在整么社区号修改过密码需要重新更新游戏数据
            } else {
                //游戏无数据添加新数据
                //todo 这里是注册同步数据之后跳转的页面，出现跳转链接问题
                include XY_DIR . '/xxsql/xxsql.php';
            }
            // 同步帐号后直接刷新当前页面

            $url = $configs['xy_url'];
            header("Location: $url$_SERVER[REQUEST_URI]", true, 302);
            exit;
        }
    } catch (Exception $e) {
        header("Location: {$configs['jy_url']}", true, 302);
        exit;
    }
    ?>

</div>

</body>
</html>
