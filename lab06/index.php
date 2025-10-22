<?php
require_once "controllers/ProductController.php";
require_once "views/header.php";

$productController = new ProductController();

// Nhận từ khóa tìm kiếm
$keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';

// Nhận trang hiện tại
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$limit = 5;

// Nếu có tìm kiếm, lấy dữ liệu theo từ khóa + phân trang
$products = $productController->pagination($keyword, $page, $limit);
?>

<div class="container">
    <h2>Danh sách sản phẩm</h2>

    <form method="GET" action="">
        <input type="text" name="keyword" placeholder="Nhập từ khóa..." value="<?= htmlspecialchars($keyword); ?>">
        <button type="submit">Tìm kiếm</button>
    </form>

    <div class="product-list">
        <?php if (!empty($products)): ?>
            <?php foreach ($products as $product): ?>
                <p><?= htmlspecialchars($product['name']); ?> - <?= number_format($product['price']); ?> VND</p>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Không tìm thấy sản phẩm phù hợp.</p>
        <?php endif; ?>
    </div>

    <div class="pagination">
        <?php for ($i = 1; $i <= 5; $i++): ?>
            <a href="?keyword=<?= urlencode($keyword); ?>&page=<?= $i; ?>">Trang <?= $i; ?></a> |
        <?php endfor; ?>
    </div>
</div>

<?php require_once "views/footer.php"; ?>