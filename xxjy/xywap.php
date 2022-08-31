<?php
error_reporting(E_ALL & ~E_NOTICE);
include("../class/iniclass.php");//调用iniclass文件
$wjid = $_GET['wjid'];
$password = $_GET['pass'];
$xxjyurl = '';
if ($wjid != "" && $password != "") {
    //调用user.ini是否存在
    include("../ini/user_ini.php");
    $pass = ($iniFile->getItem('验证信息', '玩家验证'));
    if ($pass == $password && $password != "" && $pass != "") {
        $name = ($iniFile->getItem('验证信息', '玩家昵称'));
        $xxjyurl = "?wjid=" . $wjid . "&pass=" . $password;
    }
}

// 返回首页
if (empty($xxjyurl)) {
    header('location: index.php', true, 302);
    exit;
}

include_once(__DIR__ . '/../config/Common.php');
$hosts = config_item('urls');

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
    <title>分区列表-幻想西游-</title>
    <link rel="icon" href="../img/favicon.png" type="image/x-icon"/>
    <style>
        ul {list-style-type: none;}
        ul, li {margin: 0;padding: 0}
    </style>
</head>
<body>
<div>
    <img src="/fqxy/pic/login/1.jpg" alt="图片"/>
    <p>古典神话网游，持神兵利器，降五爪金龙，携爱行走西游路……</p>
    <span>==================</span><br>
    <span>请选择分区：</span><br>
    <ul>
        <?php foreach ($hosts  as $v): ?>
        <li>
            <?php if ($v['status']):?>
                 <a href="http<?=$v['https_suffix']?>://<?=$v['host']?>/fqxy/xyy.php<?php echo $xxjyurl . "&qy=1" ?>" style='color:green'><?=$v['name']?></a>
            <?php else :?>
                <span style='color:red'><?=$v['name']?>（关闭）</span>
            <?php endif;?>
        </li>
        <?php endforeach;?>
    </ul>
    <span>==================</span>
    <p>游戏问题请加入QQ群反馈：39387037 </p>
</div>
</body>
</html>
