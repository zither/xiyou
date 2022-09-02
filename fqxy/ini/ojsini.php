<?php

if($zsspd2==1){
    flock($fp2,LOCK_UN);
} else{
    echo "服务器开小差了";
}
fclose($fp2);
