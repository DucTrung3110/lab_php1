<?php
require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../models/Product.php';

class ProductController
{
    protected $productModel;

    public function __construct()
    {
        $db = Database::connect();
        $this->productModel = new Product($db);
    }

    // Liệt kê sản phẩm hết hàng
    public function listOutOfStock()
    {
        $products = $this->productModel->getOutOfStockProducts();
        include __DIR__ . '/../views/product_outstock.php';
    }

    // Liệt kê sản phẩm bán chạy
    public function listBestSelling()
    {
        $products = $this->productModel->getBestSellingProducts();
        include __DIR__ . '/../views/product_bestselling.php';
    }
}
