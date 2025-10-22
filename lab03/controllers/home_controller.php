<?php
// Controller cho trang chủ
function homeController()
{
    $title   = "Trang chủ";
    $content = "Chào mừng đến với website của chúng tôi!";
    // Render view
    include __DIR__ . '/../views/home.php';
}

// Gọi controller
homeController();
