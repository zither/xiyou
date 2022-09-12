<?php
if (defined('XY_DIR')) {
    $json = '[[{"id":470,"mz":"高家大门","ms":"高家大门往哪里走呢？","dtx":21,"dty":0,"dtxy":"21_0","up":"","down":"","left":"","right":"","up_jump":"","down_jump":"","left_jump":"","right_jump":"1_114","up_distance":0,"down_distance":0,"left_distance":0,"right_distance":0,"is_jump":false},"—",{"id":149,"mz":"村口","ms":"人来人往的高家庄村口","dtx":1,"dty":114,"dtxy":"1_114","up":"","down":"1_115","left":"","right":"1_113","up_jump":"","down_jump":"","left_jump":"21_0","right_jump":"","up_distance":0,"down_distance":0,"left_distance":0,"right_distance":0,"is_jump":true}]]'; 
    return $map_arr = json_decode($json, true);
}
