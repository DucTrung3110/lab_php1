<?php
session_start();

// Khởi tạo mảng lưu trữ sản phẩm trong session nếu chưa có
if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = [];
}

// Xử lý khi người dùng submit form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy dữ liệu từ form và lưu vào mảng
    $new = [
        'name'       => trim($_POST['name']),
        'price'      => (float) $_POST['price'],
        'short_desc' => trim($_POST['short_desc']),
    ];
    $_SESSION['products'][] = $new;
    // Chuyển hướng về trang danh sách để tránh submit lại
    header('Location: add_product.php');
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Thêm sản phẩm</title>
</head>

<body>
    <h1>Thêm sản phẩm mới</h1>
    <form action="" method="post">
        <label>
            Tên sản phẩm:<br>
            <input type="text" name="name" required>
        </label><br>
        <label>
            Giá tiền:<br>
            <input type="number" name="price" required>
        </label><br>
        <label>
            Mô tả ngắn:<br>
            <textarea name="short_desc" required></textarea>
        </label><br>
        <button type="submit">Thêm</button>
    </form>

    <h2>Danh sách vừa thêm</h2>
    <ul>
        <?php foreach ($_SESSION['products'] as $p): ?>
            <li>
                <?= htmlspecialchars($p['name']) ?> – <?= number_format($p['price'], 0, '.', ',') ?>$:<br>
                <?= htmlspecialchars($p['short_desc']) ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>