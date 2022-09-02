<?php

class DB {

    protected static $mysql = null;

    public static function instance()
    {
        if (is_null(static::$mysql)) {
            throw new RuntimeException('数据库未初始化');
        }
        return static::$mysql;
    }

    public static function init(string $host, string $user, string $password, string $database)
    {
        if (is_null(static::$mysql)) {
            $conn = mysqli_connect($host, $user, $password, $database) or die ("连接数据库 $database 失败");
            mysqli_query($conn, "set names utf8");
            static::$mysql = $conn;
        }

        return static::$mysql;
    }
}

