<?php


function str_rand($length = 32, $char = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ') {
    if(!is_int($length) || $length < 0) {
        return false;
    }
    $string = '';
    for($i = $length; $i > 0; $i--) {
        $string .= $char[mt_rand(0, strlen($char) - 1)];
    }
    return $string;
}

function show_message($message)
{
    $configs = include XY_CONFIG_DIR . '/config.php';
    $host = $configs['jy_url'];
    echo $message . "<br>";
    echo "<a href='$host'>返回首页</a>";
    exit;
}

function show_image(string $image, int $newlines = 0)
{
    $xstp = wj_xtsz('图片显示');
    if ($xstp == 1) {
        echo '<img src="/fqxy/pic/' . $image . ' "alt="图片"/>';
        for (;$newlines > 0;$newlines--) {
            echo "<br>";
        }
    }
}