<?php

/**
 * 功能说明：小地图绘制时操作房间距离
 */

//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");

if($zsspd==1) {
    $knpcc = $npcc;
    $arr = explode('_', $npcc);
    $direction = $arr[0];
    $type = $arr[1];

    include XY_DIR . '/ini/user_ini.php';
    $dtx = $iniFile->getItem('地图坐标', 'x');
    $dty = $iniFile->getItem('地图坐标', 'y');
    $dtxy = "{$dtx}_{$dty}";
    $db = DB::instance();
    $current = $db->get('map', '*', ['dtxy' => $dtxy]);
    if ($direction == 3) {
        $up = $db->get('map', '*', ['dtx' => $dtx, 'down' => $dtxy]);
        if (empty($up)) {
            echo "上面未连接，无法操作<br>";
        } else {
            if ($type == 1) {
                //加距离
                $db->update('map', ['up_distance[+]' => 2], ['dtxy' => $dtxy]);
                $db->update('map', ['down_distance[+]' => 2], ['dtxy' => $up['dtxy']]);
            } else {
                //减距离
                if ($up['down_distance'] <= 0 || $current['up_distance'] <= 0) {
                    echo "距离无法再减了<br>";
                } else {
                    $db->update('map', ['up_distance[-]' => 2], ['dtxy' => $dtxy]);
                    $db->update('map', ['down_distance[-]' => 2], ['dtxy' => $up['dtxy']]);
                }
            }
        }
    } else if ($direction == 4) {
        $down = $db->get('map', '*', ['dtx' => $dtx, 'up' => $dtxy]);
        if (empty($down)) {
            echo "下面未连接，无法操作<br>";
        } else {
            if ($type == 1) {
                //加距离
                $db->update('map', ['down_distance[+]' => 2], ['dtxy' => $dtxy]);
                $db->update('map', ['up_distance[+]' => 2], ['dtxy' => $down['dtxy']]);
            } else {
                //减距离
                if ($down['up_distance'] <= 0 || $current['down_distance'] <= 0) {
                    echo "距离无法再减了<br>";
                } else {
                    $db->update('map', ['down_distance[-]' => 2], ['dtxy' => $dtxy]);
                    $db->update('map', ['up_distance[-]' => 2], ['dtxy' => $down['dtxy']]);
                }
            }
        }
    } else if ($direction == 5) {
        $left = $db->get('map', '*', ['dtx' => $dtx, 'right' => $dtxy]);
        if (empty($left)) {
            echo "左面未连接，无法操作<br>";
        } else {
            if ($type == 1) {
                //加距离
                $db->update('map', ['left_distance[+]' => 2], ['dtxy' => $dtxy]);
                $db->update('map', ['right_distance[+]' => 2], ['dtxy' => $left['dtxy']]);
            } else {
                //减距离
                if ($left['right_distance'] <= 0 || $current['left_distance'] <= 0) {
                    echo "距离无法再减了<br>";
                } else {
                    $db->update('map', ['left_distance[-]' => 2], ['dtxy' => $dtxy]);
                    $db->update('map', ['right_distance[-]' => 2], ['dtxy' => $left['dtxy']]);
                }
            }
        }
    } else if ($direction == 6){
        $right = $db->get('map', '*', ['dtx' => $dtx, 'left' => $dtxy]);
        if (empty($right)) {
            echo "右面未连接，无法操作<br>";
        } else {
            if ($type == 1) {
                //加距离
                $db->update('map', ['right_distance[+]' => 2], ['dtxy' => $dtxy]);
                $db->update('map', ['left_distance[+]' => 2], ['dtxy' => $right['dtxy']]);
            } else {
                //减距离
                if ($right['left_distance'] <= 0 || $current['right_distance'] <= 0) {
                    echo "距离无法再减了<br>";
                } else {
                    $db->update('map', ['right_distance[-]' => 2], ['dtxy' => $dtxy]);
                    $db->update('map', ['left_distance[-]' => 2], ['dtxy' => $right['dtxy']]);
                }
            }
        }
    }



    include XY_DIR . '/template/xy008.php';
}

//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini
