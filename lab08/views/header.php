<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Lab 8 MVC</title>
    <style>
        table,
        th,
        td {
            border: 1px solid #333;
            border-collapse: collapse;
            padding: 8px;
        }

        nav a {
            margin: 0 10px;
        }
    </style>
</head>

<body>
    <h1>Lab 8 - Ứng dụng MVC với PHP OOP</h1>
    <nav>
        <a href="index.php?action=list_categories">Danh Mục Sản Phẩm</a> |
        <a href="index.php?action=list_users">Danh Sách Người Dùng</a> |
        <a href="index.php?action=out_of_stock">Sản Phẩm Hết Hàng</a> |
        <a href="index.php?action=best_selling">Sản Phẩm Bán Chạy</a>
    </nav>
    <hr>