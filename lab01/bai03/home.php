<?php
session_start();
require 'functions.php';
// Chặn truy cập nếu chưa đăng nhập
if (!isLoggedIn()) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Trang chủ</title>
</head>

<body>
    <h1>Chào, <?= htmlspecialchars($_SESSION['user']) ?></h1>
    <p><a href="logout.php">Đăng xuất</a></p>
</body>

</html>