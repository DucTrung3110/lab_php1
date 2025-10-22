<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Website' ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
        }

        .header {
            background: #333;
            color: white;
            padding: 1rem;
        }

        .nav {
            background: #555;
            padding: .5rem;
        }

        .nav a {
            color: white;
            text-decoration: none;
            margin-right: 1rem;
        }

        .container {
            padding: 2rem;
        }

        .product {
            border: 1px solid #ddd;
            padding: 1rem;
            margin: 1rem 0;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>My Website</h1>
    </div>
    <div class="nav">
        <a href="?page=home">Trang chủ</a>
        <a href="?page=products">Sản phẩm</a>
    </div>
    <div class="container">
        <?= $body_content ?>
    </div>
</body>

</html>