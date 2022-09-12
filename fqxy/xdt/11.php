<?php
if (defined('XY_DIR')) {
    $json = '[[{"id":310,"mz":"松林","ms":"松林往哪里走呢？","dtx":10,"dty":15,"dtxy":"10_15","up":"","down":"","left":"10_16","right":"10_14","up_jump":"","down_jump":"11_0","left_jump":"","right_jump":"","up_distance":0,"down_distance":0,"left_distance":0,"right_distance":0,"is_jump":true}],["|"],[{"id":313,"mz":"松林(4,4)","ms":"松林(4,4)往哪里走呢？","dtx":11,"dty":0,"dtxy":"11_0","up":"","down":"","left":"","right":"","up_jump":"10_15","down_jump":"","left_jump":"","right_jump":"","up_distance":0,"down_distance":0,"left_distance":0,"right_distance":0,"is_jump":false}]]'; 
    return $map_arr = json_decode($json, true);
}
