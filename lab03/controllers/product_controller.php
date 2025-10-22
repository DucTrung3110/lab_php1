<?php
// Controller cho trang sản phẩm
include __DIR__ . '/../models/product_model.php';

function productController()
{
    $title    = "Danh sách sản phẩm";
    // Lấy dữ liệu từ Model
    $products = getProducts();
    // Render view
    include __DIR__ . '/../views/products.php';
}

// Gọi controller
productController();
