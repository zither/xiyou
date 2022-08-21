<?php

if (!function_exists('mysql_query')) {
    function mysql_query($sql, $conn = null) {
        if (is_null($conn)) {
            global $conn;
        }
        return mysqli_query($conn, $sql);
    }

    function mysql_fetch_array($result, $result_type = MYSQLI_BOTH)
    {
        return mysqli_fetch_array($result, $result_type);
    }

    function mysql_num_rows($result)
    {
        mysqli_num_rows($result);
    }
    function mysql_error()
    {
        global $conn;
        return mysqli_error($conn);
    }
}