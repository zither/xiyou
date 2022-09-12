<?php
if (defined('XY_DIR')) {
    $json = '[[{"id":147,"mz":"土路","ms":"人来人往的官道","dtx":1,"dty":112,"dtxy":"1_112","up":"","down":"","left":"1_113","right":"1_102","up_jump":"","down_jump":"12_0","left_jump":"","right_jump":"","up_distance":0,"down_distance":0,"left_distance":0,"right_distance":0,"is_jump":true}],["|"],[{"id":329,"mz":"西瓜田(4,4)","ms":"西瓜田(4,4)往哪里走呢？","dtx":12,"dty":0,"dtxy":"12_0","up":"","down":"","left":"","right":"","up_jump":"1_112","down_jump":"","left_jump":"","right_jump":"","up_distance":0,"down_distance":0,"left_distance":0,"right_distance":0,"is_jump":false}]]'; 
    return $map_arr = json_decode($json, true);
}
