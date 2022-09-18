<?php

include __DIR__ . '/../includes/constants.php';
include ROOT . '/sql/mysql.php';

$db = DB::instance();
$configs = include JY_CONFIG_DIR . '/config.php';

$arguments = file_get_contents('php://input');
$a = explode("|", $arguments);

$uid = $a[0] ?? null;
$password = $a[1] ?? null;

$yxhe = 0;
if ($uid && !empty($password)) {
    $savedPassword = $db->get('gmuser', 'password', ['uid' => $uid]);
    if (hash_equals($savedPassword, $password)) {
        $yxhe = 1;
    }
}

echo $yxhe;
