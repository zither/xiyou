<?php

if (isset($xrwpd) && $xrwpd == 1) {
    if ($m == 1) {
        $rwstr = $xrwidd . "_" . $xrwfl;
        $rid = $rw2[$rwstr];

        if ($rid == 392 || $rid == 1 || $rid == 2) {
            if ($tpbl == 1) {
                $img = './pic/ts/ts1.png';
                echo '<img src="' . $img . ' "alt="图片"/〉';
                echo "<br>";
            } else {
                echo "<font color=black>！</font>";
            }
        }
        if ($rid == 3) {
            if ($tpbl == 1) {
                $img = './pic/ts/ts2.png';
                echo '<img src="' . $img . ' "alt="图片"/〉';
                echo "<br>";
            } else {
                echo "<font color=black>？</font>";
            }
        }
    } else {
        if ($m >= 2) {
            if ($tpbl == 1) {
                $img = './pic/ts/ts1.png';
                echo '<img src="' . $img . ' "alt="图片"/〉';
                echo "<br>";
            } else {
                echo "<font color=black>！</font>";
            }
        } else {
        }
    }
}

