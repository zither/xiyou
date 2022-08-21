<?php
error_reporting(E_ALL & ~E_NOTICE);

try {
    $zcxx = '';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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

        //连接数据库
        include("../sql/mysql.php");//调用数据库连接
        $user = 0;
        $q2 = "o_user_list";
        $sql1 = mysql_query("select uid,username,ma from $q2 where username='$zczh1'", $conn);
        $info1 = @mysql_fetch_array($sql1);
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
        include("../url/url.php");
        $xyurl = "http://" . $xxjyurl . "/xxjy/xxjyxgg.php?xzh=$zczh1&&xmm=$zczh3";
        echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=$xyurl'>";
    }
} catch (InvalidArgumentException $e) {
    $zcxx = sprintf('<span style="color: red">%s</span>', $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <title>幻想西游-修改密码</title>

    <link rel="stylesheet" href="../css/touchScreen/mobile.css" />
    <link rel="stylesheet" href="../css/touchScreen/ch5game.css" />
    <link rel="stylesheet" href="../css/touchScreen/ccolorbutton.css" />
    <link rel="icon" href="../img/favicon.png" type="image/x-icon" />
    <style type="text/css">
        #search{
            width:235px;
            height:32px;
            border-radius:10px;
            margin-top:5px;
            margin-bottom:5px;
            border:1px solid#ccc;
            background-color:transparent;
            transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;
        }
        #search1{
            width:82px;
            height:38px;
            background:#0086DB;
            border:0;
            border-radius:10px;
            margin-top:5px;
            color:white;
            font-size:16px;
            cursor:pointer;
        }
        input:focus{
            border-color:#66AFE9!important;
            outline:0;
            -webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,0.6);
            -moz-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,0.6);
            box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,0.6);
        }
        ::-webkit-input-placeholder{
            text-indent:20px;
            font-size:16px;
        }
        ::-moz-input-placeholder{
            text-indent:20px;
            font-size:16px;
        }

        a{color: #0077E0;}	table{max-width: 600px;min-width: 280px;}	td{height:30px;}	.lbg{height:20px;border-bottom: 1px solid #DCDCDC;}	.btable{border-top: 1px solid #9DB3C5;}
        .circle {width: 16px;height: 16px;line-height:16px;-moz-border-radius: 8px;-webkit-border-radius: 8px;border-radius: 8px;color: #fff;text-align:center;font-size: 10px;}
        .red.circle{background: #e62727;}	.orange.circle{background: #ff5c00;}	.pink.circle{background: #e22092;}	.green.circle{background: #56A418;}	.blue.circle{background: #2981e4;}	.err{color: red;font-size: 13px;}
    </style>
</head>
<body>



<div class="g-mn">
    <div class="m-box">
        <div class="m-box-hd">
            <div class="tt">
                <?php echo $zcxx;?><br>
                请输入你的帐号与原始密码用于修改密码
            </div>
        </div>
        <div class="m-box-mn" style="padding: 5px 10px 0px 10px;">
            <form  action="<?php echo "xxjyxg.php";?>" method="post">
                账号：<input  type="text" name="zc1" placeholder="账号"id='search'><font color=black></font><br>
                原始密码：<input  type="text" name="zc2" placeholder="原始密码"id='search'><font color=black></font><br>
                新的密码：<input  type="text" name="zc3" placeholder="新的密码"id='search'><br>
                确认密码：<input  type="text" name="zc4" placeholder="确认新密码"id='search'><br>
                <input  type="submit" name="submit"  value="修改" id="search1" ><br>
            </form>
            <br>
            <a href='/xxjy/login.php'><font color=blue>返回登录</font></a>
            <br>
            <br>
        </div>
    </div>
</div>
</body>
</html>




