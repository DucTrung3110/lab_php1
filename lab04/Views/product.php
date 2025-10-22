<?php
// Lấy dữ liệu từ DB
require_once __DIR__ . '/../Model/Database.php';
$db = new Database('127.0.0.1', 'lab4_db', 'root', '31102001Ductrung');
$pdo = $db->connect();
$products = $pdo->query('SELECT * FROM products')->fetchAll(PDO::FETCH_ASSOC);
$title = 'Products';
ob_start();
?>
<h1>Product List</h1>
<ul>
    <?php foreach ($products as $p): ?>
        <li><?= htmlspecialchars($p['name']) ?> - <?= number_format($p['price'], 2) ?>$</li>
    <?php endforeach; ?>
</ul>
<?php
$body_content = ob_get_clean();
echo $body_content;
$db->disconnect();
