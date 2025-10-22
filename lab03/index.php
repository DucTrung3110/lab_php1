<?php
$page = $_GET['page'] ?? 'home';

switch ($page) {
    case 'home':
        include __DIR__ . '/controllers/home_controller.php';
        break;
    case 'products':
        include __DIR__ . '/controllers/product_controller.php';
        break;
    default:
        include __DIR__ . '/controllers/home_controller.php';
}
