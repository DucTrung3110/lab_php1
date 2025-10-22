<?php
ob_start();
?>
<h2><?= $title ?></h2>
<div class="products">
    <?php foreach ($products as $product): ?>
        <div class="product">
            <h3><?= htmlspecialchars($product['name']) ?></h3>
            <p>Giá: <?= number_format($product['price']) ?> VNĐ</p>
        </div>
    <?php endforeach; ?>
</div>
<?php
// Lấy phần nội dung vừa render
$body_content = ob_get_clean();
// Include layout để hiển thị
include __DIR__ . '/layout.php';
