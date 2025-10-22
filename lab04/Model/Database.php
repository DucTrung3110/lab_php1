<?php
class Database
{
    private string $host;
    private string $db;
    private string $user;
    private string $pass;
    private ?PDO $conn = null;

    public function __construct(string $host, string $db, string $user, string $pass)
    {
        $this->host = $host;
        $this->db   = $db;
        $this->user = $user;
        $this->pass = $pass;
    }

    public function connect(): PDO
    {
        if (!$this->conn) {
            $dsn = "mysql:host={$this->host};dbname={$this->db};charset=utf8mb4";
            $this->conn = new PDO($dsn, $this->user, $this->pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Kết nối thành công!<br>";
        }
        return $this->conn;
    }

    public function disconnect(): void
    {
        $this->conn = null;
        echo "Ngắt kết nối thành công!<br>";
    }
}
