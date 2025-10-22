<?php
require_once __DIR__ . '/Controller/Controller.php';
require_once __DIR__ . '/Controller/AdminController.php';

$page = $_GET['page'] ?? 'home';
switch ($page) {
    case 'home':
        (new Controller())->render('home');
        break;
    case 'product':
        (new Controller())->render('product');
        break;
    case 'admin':
        (new AdminController())->index();
        break;
    default:
        header('Location:?page=home');
}
