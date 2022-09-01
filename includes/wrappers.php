<?php

/**
 * 删除文件前检查文件是否存在
 *
 * @param $path
 */
function _unlink($path)
{
    if (file_exists($path)) {
        unlink($path);
    }
}

/**
 * 数据库兼容性代码
 */
if (!function_exists('mysql_query')) {
    function mysql_query($sql, $conn = null)
    {
        if (is_null($conn)) {
            global $conn;
        }
        return mysqli_query($conn, $sql);
    }
}

if (!function_exists('mysql_fetch_array')) {

    function mysql_fetch_array($result, $result_type = MYSQLI_BOTH)
    {
        return mysqli_fetch_array($result, $result_type);
    }
}

if (!function_exists('mysql_num_rows')) {

    function mysql_num_rows($result)
    {
        mysqli_num_rows($result);
    }
}

if (!function_exists('mysql_error')) {
    function mysql_error()
    {
        global $conn;
        return mysqli_error($conn);
    }
}
