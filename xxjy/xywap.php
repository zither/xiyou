<?php
include_once __DIR__ . '/../includes/constants.php';
include_once ROOT . '/sql/mysql.php';

$db = DB::instance();
$uid = $_GET['uid'];
$token = $_GET['token'];
$xxjyurl = '';
if ($uid != "" && $token != "") {
    $ma = $db->get('o_user_list', 'ma', ['uid' => $uid]);
    if (hash_equals($token, $ma)) {
        $xxjyurl = "?uid=" . $uid. "&token=" . $token;
    }
}

// 返回首页
if (empty($xxjyurl)) {
    header('location: index.php', true, 302);
    exit;
}

$configs = include JY_CONFIG_DIR . '/config.php';
$hosts = $configs['urls'];

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
                 <a href="<?=$v['url']?>/fqxy/xyy.php<?php echo $xxjyurl . "&qy=" . $v['qy'] ?>" style='color:green'><?=$v['name']?></a>
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
