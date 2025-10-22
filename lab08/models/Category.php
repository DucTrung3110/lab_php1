<?php
class Category
{
    protected $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    // Hàm lấy tất cả danh mục
    public function getAllCategories()
    {
        $stmt = $this->conn->prepare("SELECT * FROM categories");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
