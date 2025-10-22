<?php
session_start();
require_once "controllers/UserController.php";

$action = $_GET['action'] ?? 'login';
$userController = new UserController();

if ($action == 'login') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $loginMessage = $userController->login();
        include "views/login.php";
    } else {
        include "views/login.php";
    }
} elseif ($action == 'register') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $registerMessage = $userController->register();
        include "views/register.php";
    } else {
        include "views/register.php";
    }
} elseif ($action == 'dashboard') {
    // Trang sau khi đăng nhập thành công
    if (!isset($_SESSION['user'])) {
        header("Location: index.php?action=login");
        exit;
    }
    require_once "views/header.php";
    echo "<div class='container'>";
    echo "<h2>Chào mừng, " . htmlspecialchars($_SESSION['user']['username']) . "!</h2>";
    echo "<p>Bạn đã đăng nhập thành công.</p>";
    echo "</div>";
    require_once "views/footer.php";
} else {
    header("Location: index.php?action=login");
    exit;
}
