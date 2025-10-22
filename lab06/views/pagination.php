<?php
require_once "controllers/ProductController.php";
$productController = new ProductController();
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$limit = 5;
$products = $productController->pagination($page, $limit);

foreach ($products as $product) {
    echo "<p>" . $product['name'] . " - " . number_format($product['price']) . " VND</p>";
}

for ($i = 1; $i <= 5; $i++) {
    echo "<a href='?page=$i'>Trang $i</a> | ";
}
