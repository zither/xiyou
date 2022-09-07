<?php

$_SESSION = [];
unset($_SESSION);
session_destroy();

$configs = include XY_CONFIG_DIR . '/config.php';
$jy_url = $configs['jy_url'];
header("location: $jy_url", true, 302);
exit;
