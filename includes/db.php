<?php
include_once __DIR__ . '/Medoo.php';

use Medoo\Medoo;

class DB {

    /**
     * @var Medoo | null
     */
    protected static $mysql = null;

    public static function instance()
    {
        if (is_null(static::$mysql)) {
            throw new RuntimeException('数据库未初始化');
        }
        return static::$mysql;
    }

    public static function init(string $host, string $user, string $password, string $database, int $port = 3306)
    {
        if (is_null(static::$mysql)) {
            try {
                static::$mysql = new Medoo([
                    'database_type' => 'mysql',
                    'database_name' => $database,
                    'server' => $host,
                    'username' => $user,
                    'password' => $password,
                    'port' => $port,
                    'charset' => 'utf8mb4',
                    'collation' => 'utf8mb4_general_ci',
                    'option' => [
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_EMULATE_PREPARES => false
                    ],
                ]);
            } catch (Exception $e) {
                die('连接数据库失败：' . $e->getMessage());
            }
        }

        return static::$mysql;
    }
}

