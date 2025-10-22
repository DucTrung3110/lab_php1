<?php
class Database
{
    private static $instance = null;
    private $conn;
    private $host = 'localhost';
    private $username = 'root';
    private $password = '31102001Ductrung';
    private $dbname = 'lab05';

    // Private constructor để tạo kết nối
    private function __construct()
    {
        try {
            $this->conn = new PDO(
                "mysql:host={$this->host};dbname={$this->dbname};charset=utf8",
                $this->username,
                $this->password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Lỗi kết nối: " . $e->getMessage());
        }
    }

    // Lấy instance duy nhất của Database
    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    // Lấy kết nối PDO
    public function getConnection()
    {
        return $this->conn;
    }
}
