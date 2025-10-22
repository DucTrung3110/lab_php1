<?php
$action = $_GET['action'] ?? 'default';

switch ($action) {
    case 'list_categories':
        require_once __DIR__ . '/controllers/CategoryController.php';
        $controller = new CategoryController();
        $controller->listCategories();
        break;

    case 'list_users':
        require_once __DIR__ . '/controllers/UserController.php';
        $controller = new UserController();
        $controller->listUsers();
        break;

    case 'out_of_stock':
        require_once __DIR__ . '/controllers/ProductController.php';
        $controller = new ProductController();
        $controller->listOutOfStock();
        break;

    case 'best_selling':
        require_once __DIR__ . '/controllers/ProductController.php';
        $controller = new ProductController();
        $controller->listBestSelling();
        break;

    default:
        echo "Chào mừng bạn đến với Lab 8. Vui lòng chọn chức năng ở trên!";
        // Gợi ý menu chức năng
        echo '<ul>
            <li><a href="?action=list_categories">Danh sách danh mục</a></li>
            <li><a href="?action=list_users">Danh sách người dùng</a></li>
            <li><a href="?action=out_of_stock">Sản phẩm hết hàng</a></li>
            <li><a href="?action=best_selling">Sản phẩm bán chạy</a></li>
        </ul>';
}
