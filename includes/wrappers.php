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
        $conn = get_mysql_conn();
        return $conn->query($sql);
    }
}

if (!function_exists('mysql_fetch_array')) {

    function mysql_fetch_array($result, $result_type = MYSQLI_BOTH)
    {
        /** @var \PDOStatement $result */
        return $result->fetch(PDO::FETCH_ASSOC);
    }
}

if (!function_exists('mysql_num_rows')) {

    function mysql_num_rows($result)
    {
        /** @var \PDOStatement $result */
        return $result->rowCount();
    }
}

if (!function_exists('mysql_error')) {
    function mysql_error()
    {
        $conn = get_mysql_conn();
        return $conn->error;
    }
}

function get_mysql_conn()
{
    if (!class_exists('DB')) {
        throw new RuntimeException('缺少依赖：DB::class');
    }
    $conn = DB::instance();
    if (is_null($conn)) {
        throw new RuntimeException('数据库链接未找到');
    }
    return $conn;
}
