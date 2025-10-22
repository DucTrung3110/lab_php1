<?php
require_once __DIR__ . '/app/controllers/StudentController.php';

$controller = new StudentController();

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'detail':
            $controller->detail();
            break;
        case 'category':
            $controller->category();
            break;
        default:
            $controller->index();
            break;
    }
} else {
    $controller->index();
}
