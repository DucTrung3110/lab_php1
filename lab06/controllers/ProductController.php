<?php
require_once "models/Product.php";

class ProductController
{
    private $productModel;

    public function __construct()
    {
        $this->productModel = new Product();
    }

    public function search()
    {
        if (isset($_GET['keyword'])) {
            return $this->productModel->searchProducts($_GET['keyword']);
        }
        return [];
    }

    public function pagination($keyword, $page, $limit)
    {
        $offset = ($page - 1) * $limit;
        return $this->productModel->getProductsPagination($keyword, $offset, $limit);
    }
}
