<?php

include __DIR__ . '/../includes/constants.php';
include ROOT . '/sql/mysql.php';

$db = DB::instance();
$configs = include JY_CONFIG_DIR . '/config.php';

$arguments = file_get_contents('php://input');
$a = $arguments_arr = explode("|", $arguments);

$uid = $a[0] ?? null;
$token = $a[1] ?? null;
$xxyou_url = $a[2] ?? null;
$xxyou_qy = $a[3] ?? null;

//判断区域是否正确防止网页修改
$qy = $xxyou_qy;
$url = '';
foreach ($configs['urls'] as $v) {
    if ($v['qy'] == $qy) {
        $url = $v['url'];
        break;
    }
}

$yxhe = 1;
if ($xxyou_url == $url) {
    if ($uid && !empty($token)) {
        $ma = $db->get('o_user_list', 'ma', ['uid' => $uid]);
        if (hash_equals($ma, $token)) {
            $yxhe = 2;
        }
    }
}

echo $yxhe;
