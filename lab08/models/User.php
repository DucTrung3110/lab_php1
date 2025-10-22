<?php
class User
{
    protected $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    // Lấy danh sách người dùng
    public function getAllUsers()
    {
        $stmt = $this->conn->prepare("SELECT * FROM users");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
