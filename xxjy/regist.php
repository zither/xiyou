<?php
error_reporting(E_ALL & ~E_NOTICE);
ini_set("date.timezone", "PRC");//时间效准代码
try {
    $zcxx = '';
    if ($_POST['submit']) {
        if (empty($_POST['zc1'])) {
            throw new InvalidArgumentException('帐号不能为空');
        }
        if (empty($_POST['zc2'])) {
            throw new InvalidArgumentException('密码不能为空');
        }
        if (empty($_POST['zc3'])) {
            throw new InvalidArgumentException('密码不能为空');
        }
        if (empty($_POST['zc4']) || !preg_match('/^[a-zA-Z0-9]{6,12}$/', $_POST['zc4'])) {
            throw new InvalidArgumentException('无效安全码');
        }
        if (empty($_POST['zc6'])) {
            throw new InvalidArgumentException('昵称不能为空');
        }
        if (!preg_match('/^[a-zA-Z0-9]{6,12}$/', $_POST['zc1'])) {
            throw new InvalidArgumentException('账号只能为6-12位字母或数字');
        }
        if (!preg_match('/^[\x{4e00}-\x{9fa5}]{2,5}$/u', $_POST['zc6'])) {
            throw new InvalidArgumentException('昵称只能为2-5位汉字');
        }

        $zczh1 = $_POST['zc1']; // 帐号
        $zczh2 = $_POST['zc2']; // 密码
        $zczh3 = $_POST['zc3']; // 确认密码
        $zczh6 = $_POST['zc6']; // 昵称
        $zczh4 = $_POST['zc4']; // 安全码

        //连接数据库
        include("../sql/mysql.php");//调用数据库连接

        //查询账号是否已占有
        $q2 = "o_user_list";
        $sql1 = mysqli_query($conn, "select uid from $q2 where username='$zczh1'");
        $info1 = @mysqli_fetch_array($sql1);
        if (!empty($info1)) {
            throw new InvalidArgumentException('对不起该账号已存在了');
        }

        $q2 = "o_user_list";
        $sql1 = mysql_query("select name from $q2 where name='$zczh6'", $conn);
        $info1 = @mysql_fetch_array($sql1);
        if (!empty($info1)) {
            throw new InvalidArgumentException('对不起！这个昵称太火了换一个吧');
        }

        //获取最大值
        $q2 = "o_user_list";
        $sql1 = mysql_query("select MAX(uid) from $q2");
        $abc = mysql_fetch_array($sql1);
        $maxid = empty($abc) ? 0 : $abc[0];
        if ($maxid == "") {
            $maxid = 0;
        } else {
        }
        $maxidd = $maxid + 1;

        $ma = md5($zczh2 . 'ALL_PS');;
        $aqm = md5($zczh4 . 'ALL_PS');
        $zczh2 = md5($zczh2 . 'ALL_PS');
        $y = date('Y') * 1;
        $m = date('m') * 1;
        $d = date('d') * 1;
        $h = date('H') * 1;
        $i = date('i') * 1;
        $s = date('s') * 1;

        $q2 = "o_user_list";
        $sql = "insert into $q2 (uid,m_id,name,username,password,n,y,r,s,f,m,ma,aqm)  values('$maxidd','0','$zczh6','$zczh1','$zczh2','$y','$m','$d','$h','$i','$s','$ma','$aqm')";
        if (!mysql_query($sql, $conn)) {
            throw new InvalidArgumentException('帐号创建失败，请联系管理员！');
            //die('Error: ' . mysql_error());
        }

        $mysql002 = $maxidd + 10000000;
        //加入ini
        //路径
        $path = '../ache/' . $mysql002;
        $dir = iconv("UTF-8", "GBK", "$path");
        if (!file_exists($dir)) {
            mkdir($dir, 0777, true);
        }

        include("../url/url.php");
        $suffix = config_item('jy_enable_https') ? 's' : '';
        $xyurl = "http$s://" . $xxjyurl . "/xxjy/xxjyzc.php?zh=$zczh1&mm=$zczh3&aqm=$zczh4";
        echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=$xyurl'>";
        exit;
    }
} catch (InvalidArgumentException $e) {
    $zcxx = sprintf('<span style="color: red">%s</span>', $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <title>幻想西游-注册</title>

    <link rel="stylesheet" href="../css/touchScreen/mobile.css"/>
    <link rel="stylesheet" href="../css/touchScreen/ch5game.css"/>
    <link rel="stylesheet" href="../css/touchScreen/ccolorbutton.css"/>
    <link rel="icon" href="../img/favicon.png" type="image/x-icon"/>
    <style type="text/css">
        #search {
            width: 235px;
            height: 32px;
            border-radius: 10px;
            margin-top: 5px;
            margin-bottom: 5px;
            border: 1px solid #ccc;
            background-color: transparent;
            transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        }

        #search1 {
            width: 82px;
            height: 38px;
            background: #0086DB;
            border: 0;
            border-radius: 10px;
            margin-top: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        input:focus {
            border-color: #66AFE9 !important;
            outline: 0;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, 0.6);
            -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, 0.6);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, 0.6);
        }

        ::-webkit-input-placeholder {
            text-indent: 20px;
            font-size: 16px;
        }

        ::-moz-input-placeholder {
            text-indent: 20px;
            font-size: 16px;
        }

        a {
            color: #0077E0;
        }

        table {
            max-width: 600px;
            min-width: 280px;
        }

        td {
            height: 30px;
        }

        .lbg {
            height: 20px;
            border-bottom: 1px solid #DCDCDC;
        }

        .btable {
            border-top: 1px solid #9DB3C5;
        }

        .circle {
            width: 16px;
            height: 16px;
            line-height: 16px;
            -moz-border-radius: 8px;
            -webkit-border-radius: 8px;
            border-radius: 8px;
            color: #fff;
            text-align: center;
            font-size: 10px;
        }

        .red.circle {
            background: #e62727;
        }

        .orange.circle {
            background: #ff5c00;
        }

        .pink.circle {
            background: #e22092;
        }

        .green.circle {
            background: #56A418;
        }

        .blue.circle {
            background: #2981e4;
        }

        .err {
            color: red;
            font-size: 13px;
        }
    </style>
</head>
<body>
<div class="g-mn">
    <div class="m-box">
        <div class="m-box-hd">
            <div class="tt">
                <?php echo $zcxx; ?><br>
                帐号注册
            </div>
        </div>
        <div class="m-box-mn" style="padding: 5px 10px 0px 10px;">
            <form action="<?php echo "regist.php"; ?>" method="post">
                昵称：<input type="text" name="zc6" placeholder="昵称" id='search'><font color=red>（2-5位汉字）</font><br>
                账号：<input type="text" name="zc1" placeholder="账号" id='search'><font color=red>（6-12位的字母或数字）</font><br>
                密码：<input type="text" name="zc2" placeholder="密码" id='search'><font color=red></font><br>
                确认密码：<input type="text" name="zc3" placeholder="确认密码" id='search'><font color=red></font><br>
                安全码：<input type="text" name="zc4" placeholder="安全码" id='search'><font color=red>（6-12位的字母或数字）</font><br>
                <input type="submit" name="submit" value="注册" id="search1"/><br>
            </form>
            <br>
            <a href='/xxjy/login.php'><font color=blue>返回登录</font></a>
            <br>
            <br>
            <br>
            <div class="article-content" style="font-size: 15px;margin-top: 10px;">
            </div>
        </div>
    </div>
</div>
</body>
</html>




