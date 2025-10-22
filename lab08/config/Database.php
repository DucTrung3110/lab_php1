<?php
class Database
{
    private static $conn;

    public static function connect()
    {
        if (!self::$conn) {
            $dsn = "mysql:host=localhost;dbname=lab08";
            $username = "root";
            $password = "31102001Ductrung";
            try {
                self::$conn = new PDO($dsn, $username, $password);
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Kết nối thất bại: " . $e->getMessage());
            }
        }
        return self::$conn;
    }
}
