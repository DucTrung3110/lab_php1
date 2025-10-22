<?php
class Product
{
    protected $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    // Lấy các sản phẩm hết hàng (giả sử nếu trường stock bằng 0 thì hết hàng)
    public function getOutOfStockProducts()
    {
        $stmt = $this->conn->prepare("SELECT * FROM products WHERE stock = 0");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Lấy sản phẩm bán chạy (ví dụ: dựa vào trường sold_quantity, sắp xếp giảm dần và giới hạn kết quả)
    public function getBestSellingProducts($limit = 10)
    {
        $stmt = $this->conn->prepare("SELECT * FROM products ORDER BY sold_quantity DESC LIMIT :limit");
        $stmt->bindValue(":limit", (int)$limit, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
