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
    error_reporting(E_ALL & ~E_NOTICE);

    ini_set("error_reporting", "E_ALL & ~E_NOTICE");//防止报错代码
    date_default_timezone_set("PRC");
    //安全备份
    //系统维护10分钟,11:50以后
    //include("aqbf.php");
    //接收账号密码查询

    include_once __DIR__ . '/../config/Common.php';

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
        include("./sql/xxjyCurl.php");//向小轩家园总站发送数据验证
        if ($response != 2) {
            throw new Exception('帐号验证失败');
        }

        $yxhe = $response;
        $xxjy_pass = $password;
        $xxjy_qy = $qy;

        //生成社区玩家在此游戏的id和验证
        include __DIR__ . '/class/iniclass.php';
        $hf = 1;
        //o_user_list中查询是否存在，返回是否合法，合法2，不合法1
        include __DIR__ . '/ini/yxuser_ini.php';
        //社区验证游戏
        //验证成功是合法的信息
        $pass = '';
        if ($hf == 2) {
            $pass = ($iniFile->getItem('验证信息', '玩家验证'));
        }

        if ($pass == $xxjy_pass && $xxjy_pass != "" && $pass != "") {
            //存在用户的信息
            $wjid = $wjini;
            include __DIR__ . '/ini/xuser_ini.php';

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
                $zcxx1 = "小轩娱乐温馨提醒（由于小轩一站式通行证进行过修改数据验证已同步至游戏，重新登录下即可）";
                include __DIR__ . '/sql/mysql.php';
                $q2 = "o_user_list";
                $strsql = "update $q2 set password='$xxjy_pass' where sqid='$sqid'";//物品id号必改值
                $result = mysql_query($strsql);

                $inina = "yxuser.ini";
                $path =  __DIR__  .'/ache/' . $wjini;
                $ininame = $path . "/" . $inina;
                unlink($ininame);
                $iniFile = new iniFile($ininame);
                include(__DIR__ . "/xxjyindex.php");
                //检测uid是否存在如果存在整么社区号修改过密码需要重新更新游戏数据
            } else {
                //游戏无数据添加新数据
                //todo 这里是注册同步数据之后跳转的页面，出现跳转链接问题
                include __DIR__ . '/xxsql/xxsql.php';

                // 同步帐号后直接刷新当前页面
                $suffix = config_item('yx_enable_https') ? 's' : '';
                header("Location: http$suffix://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]", true, 302);
                exit;
            }
        }
    } catch (Exception $e) {
        $suffix = config_item('jy_enable_https') ? 's' : '';
        $host = config_item('host');
        header("Location: http$suffix://$host", true, 302);
        exit;
    }
    ?>

</div>

</body>
</html>
