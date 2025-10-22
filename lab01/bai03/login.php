<?php
session_start();
require 'functions.php';

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (doLogin($_POST['username'], $_POST['password'])) {
        header('Location: home.php');
        exit;
    } else {
        $error = 'Tên đăng nhập hoặc mật khẩu không đúng';
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Đăng nhập</title>
</head>

<body>
    <h1>Đăng nhập</h1>
    <?php if ($error): ?>
        <p style="color:red;"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>
    <form method="post">
        <label>Username: <input name="username" required></label><br>
        <label>Password: <input type="password" name="password" required></label><br>
        <button>Login</button>
    </form>
</body>

</html>