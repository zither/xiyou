<?php

if (!function_exists('jnxx')) {
    function jnxx(int $id, int $fl = 0)
    {
        $jnxxsz = include XY_DIR . '/data/jnxx.php';
        foreach ($jnxxsz as $v) {
            if ($id == $v['jnid']) {
                if ($fl && $fl != $v['jnfl']) {
                    continue;
                }
                return $v;
            }
        }
        return null;
    }
}

$jnidd = $jnidd ?? 0;
$xx = jnxx($jnidd);
if ($xx) {
    $jnmz = $xx['jnmz'];
    $jnms = $xx['jnms'];
} else {
    throw new RuntimeException('技能编号错误：' . $jnidd);
}