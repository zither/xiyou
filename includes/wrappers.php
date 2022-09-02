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
            $conn = get_mysql_conn();
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
        $conn = get_mysql_conn();
        return mysqli_error($conn);
    }
}

function get_mysql_conn()
{
    global $conn;
    if (is_null($conn) && !class_exists(DB::class)) {
        throw new RuntimeException('数据库链接未找到');
    }
    $conn = DB::instance();
    return $conn;
}
