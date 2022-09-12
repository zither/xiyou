<?php
if (defined('XY_DIR')) {
    $json = '[[{"id":185,"mz":"海底莽林(4,4)","ms":"海底莽林(4,4)往哪里走呢？","dtx":3,"dty":0,"dtxy":"3_0","up":"","down":"","left":"","right":"","up_jump":"","down_jump":"","left_jump":"","right_jump":"2_17","up_distance":0,"down_distance":0,"left_distance":0,"right_distance":0,"is_jump":false},"—",{"id":183,"mz":"海底","ms":"海底往哪里走呢","dtx":2,"dty":17,"dtxy":"2_17","up":"2_18","down":"","left":"","right":"2_0","up_jump":"","down_jump":"","left_jump":"3_0","right_jump":"","up_distance":0,"down_distance":0,"left_distance":0,"right_distance":0,"is_jump":true}]]'; 
    return $map_arr = json_decode($json, true);
}
