<?php
if (defined('XY_DIR')) {
    $json = '[[{"id":279,"mz":"杏林外","ms":"杏林(4,4)往哪里走呢？","dtx":9,"dty":0,"dtxy":"9_0","up":"","down":"","left":"","right":"","up_jump":"","down_jump":"","left_jump":"","right_jump":"7_13","up_distance":0,"down_distance":0,"left_distance":0,"right_distance":0,"is_jump":false},"—",{"id":262,"mz":"杏林","ms":"杏林往哪里走呢？","dtx":7,"dty":13,"dtxy":"7_13","up":"7_12","down":"","left":"","right":"","up_jump":"","down_jump":"1_104","left_jump":"9_0","right_jump":"","up_distance":0,"down_distance":0,"left_distance":0,"right_distance":0,"is_jump":true}]]'; 
    return $map_arr = json_decode($json, true);
}
