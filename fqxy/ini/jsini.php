<?php

if ($fp && $zsspd == 1) {
    if ($zsspd == 1) {
        flock($fp, LOCK_UN);
    } else {
        echo "服务器开小差了";
    }
    fclose($fp);
}
