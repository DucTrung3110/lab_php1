<form method="GET" action="">
    <input type="text" name="keyword" placeholder="Nhập từ khóa...">
    <button type="submit">Tìm kiếm</button>
</form>

<?php
require_once "controllers/ProductController.php";
$productController = new ProductController();
$products = $productController->search();

foreach ($products as $product) {
    echo "<p>" . $product['name'] . " - " . $product['price'] . " VND</p>";
}
?>