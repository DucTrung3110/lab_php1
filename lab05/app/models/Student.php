<?php
require_once __DIR__ . '/../../config/database.php';

class Student
{
    private $conn;
    private $table = "students"; // Tên bảng trong CSDL

    public function __construct()
    {
        $this->conn = Database::getInstance()->getConnection();
    }

    // Lấy danh sách tất cả các sinh viên
    public function getAllStudents()
    {
        $query = "SELECT * FROM " . $this->table;
        $stmt  = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Lấy thông tin chi tiết sinh viên theo id (sử dụng prepared statement)
    public function getStudentById($id)
    {
        $query = "SELECT * FROM " . $this->table . " WHERE id = :id";
        $stmt  = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // (Bài 3) Lấy danh sách sinh viên theo một danh mục nhất định (giả sử có trường category_id)
    public function getStudentsByCategory($categoryId)
    {
        $query = "SELECT * FROM " . $this->table . " WHERE category_id = :category_id";
        $stmt  = $this->conn->prepare($query);
        $stmt->bindParam(":category_id", $categoryId, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
