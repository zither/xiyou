<?php
if (defined('XY_DIR')) {
    $json = '[[{"id":1893,"mz":"洞廊","ms":"洞廊往哪里走呢？","dtx":82,"dty":1,"dtxy":"82_1","up":"","down":"82_0","left":"","right":"82_2","up_jump":"","down_jump":"","left_jump":"","right_jump":"","up_distance":0,"down_distance":0,"left_distance":0,"right_distance":0,"is_jump":false},"—",{"id":1894,"mz":"花厅","ms":"花厅往哪里走呢？","dtx":82,"dty":2,"dtxy":"82_2","up":"","down":"82_3","left":"82_1","right":"","up_jump":"","down_jump":"","left_jump":"","right_jump":"","up_distance":0,"down_distance":0,"left_distance":0,"right_distance":0,"is_jump":false},0,0],["|",0,"|",0,0],[{"id":1892,"mz":"山门","ms":"山门往哪里走呢？","dtx":82,"dty":0,"dtxy":"82_0","up":"82_1","down":"","left":"","right":"","up_jump":"","down_jump":"","left_jump":"","right_jump":"","up_distance":0,"down_distance":0,"left_distance":0,"right_distance":0,"is_jump":false},0,{"id":1895,"mz":"九曲廊","ms":"九曲廊往哪里走呢？","dtx":82,"dty":3,"dtxy":"82_3","up":"82_2","down":"82_4","left":"","right":"","up_jump":"","down_jump":"","left_jump":"","right_jump":"","up_distance":0,"down_distance":0,"left_distance":0,"right_distance":0,"is_jump":false},0,0],[0,0,"|",0,0],[{"id":1897,"mz":"西厢房","ms":"西厢房往哪里走呢？","dtx":82,"dty":5,"dtxy":"82_5","up":"","down":"82_6","left":"","right":"82_4","up_jump":"","down_jump":"","left_jump":"","right_jump":"","up_distance":0,"down_distance":0,"left_distance":0,"right_distance":0,"is_jump":false},"—",{"id":1896,"mz":"小厅","ms":"小厅往哪里走呢？","dtx":82,"dty":4,"dtxy":"82_4","up":"82_3","down":"82_9","left":"82_5","right":"82_7","up_jump":"","down_jump":"","left_jump":"","right_jump":"","up_distance":0,"down_distance":0,"left_distance":0,"right_distance":0,"is_jump":false},"—",{"id":1899,"mz":"东厢房","ms":"东厢房往哪里走呢？","dtx":82,"dty":7,"dtxy":"82_7","up":"","down":"82_8","left":"82_4","right":"","up_jump":"","down_jump":"","left_jump":"","right_jump":"","up_distance":0,"down_distance":0,"left_distance":0,"right_distance":0,"is_jump":false}],["|",0,"|",0,"|"],[{"id":1898,"mz":"卧室","ms":"卧室往哪里走呢？","dtx":82,"dty":6,"dtxy":"82_6","up":"82_5","down":"","left":"","right":"","up_jump":"","down_jump":"","left_jump":"","right_jump":"","up_distance":0,"down_distance":0,"left_distance":0,"right_distance":0,"is_jump":false},0,{"id":1901,"mz":"后院","ms":"后院往哪里走呢？","dtx":82,"dty":9,"dtxy":"82_9","up":"82_4","down":"82_10","left":"","right":"","up_jump":"","down_jump":"","left_jump":"","right_jump":"","up_distance":0,"down_distance":0,"left_distance":0,"right_distance":0,"is_jump":false},0,{"id":1900,"mz":"闺房","ms":"闺房往哪里走呢？","dtx":82,"dty":8,"dtxy":"82_8","up":"82_7","down":"","left":"","right":"","up_jump":"","down_jump":"","left_jump":"","right_jump":"","up_distance":0,"down_distance":0,"left_distance":0,"right_distance":0,"is_jump":false}],[0,0,"|",0,0],[0,0,{"id":1902,"mz":"石屋","ms":"石屋往哪里走呢？","dtx":82,"dty":10,"dtxy":"82_10","up":"82_9","down":"","left":"","right":"","up_jump":"","down_jump":"","left_jump":"","right_jump":"","up_distance":0,"down_distance":0,"left_distance":0,"right_distance":0,"is_jump":false},0,0]]'; 
    return $map_arr = json_decode($json, true);
}