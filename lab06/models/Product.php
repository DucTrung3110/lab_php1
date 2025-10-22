<?php
require_once "Database.php";

class Product
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function searchProducts($keyword)
    {
        $query = "SELECT * FROM products WHERE name LIKE :keyword";
        $stmt = $this->db->conn->prepare($query);
        $stmt->bindValue(":keyword", "%" . $keyword . "%", PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProductsPagination($keyword, $offset, $limit)
    {
        $query = "SELECT * FROM products WHERE name LIKE :keyword LIMIT :offset, :limit";
        $stmt = $this->db->conn->prepare($query);
        $stmt->bindValue(":keyword", "%" . $keyword . "%", PDO::PARAM_STR);
        $stmt->bindParam(":offset", $offset, PDO::PARAM_INT);
        $stmt->bindParam(":limit", $limit, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
