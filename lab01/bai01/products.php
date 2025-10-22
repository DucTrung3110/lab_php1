<?php
$products = [
    ['name' => 'Ipad',     'image' => 'image/5735884mo-khoa-icloud-ipad-4-uy-tin-jpeg.webp', 'price' => 250, 'discount' => 199,  'label' => 'HOT',     'label_class' => 'hot',     'category' => 'Gadgets',  'rating' => 4],
    ['name' => 'Iphone 16', 'image' => 'image/iphone 16 pro - 3.jpg', 'price' => 60,  'discount' => 50,   'label' => 'HOT',     'label_class' => 'hot',     'category' => 'Mobiles',  'rating' => 5],
    ['name' => 'Desktop Z', 'image' => 'image/PC-GAMING-CU-I3-12TH-GTX-1660-16GB-RAM-2.jpg', 'price' => 350, 'discount' => 299, 'label' => 'Special', 'label_class' => 'special', 'category' => 'Computers', 'rating' => 4],
    ['name' => 'Laptop W', 'image' => 'image/huong-dan-cach-xem-do-phan-giai-man-hinh-laptop-1.jpg',           'price' => 1200, 'discount' => 1000, 'label' => 'SALE',   'label_class' => 'sale',    'category' => 'Laptops',   'rating' => 5],
];
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Danh sách sản phẩm</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5faff;
            padding: 20px;
        }

        .products {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .product {
            display: flex;
            background: #fff;
            border: 1px solid #bbe1fa;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .product img {
            flex: 1;
            width: auto;
            height: 300px;
            /* Tăng chiều cao ảnh để card cao hơn */
            object-fit: contain;
        }

        .info {
            flex: 1;
            padding: 20px;
            position: relative;
            display: flex;
            flex-direction: column;
        }

        .badge {
            position: absolute;
            top: 15px;
            right: 15px;
            padding: 6px 12px;
            border-radius: 12px;
            color: #fff;
            font-size: .75em;
        }

        .badge.hot {
            background: #e63946;
        }

        .badge.special {
            background: #2a9d8f;
        }

        .badge.sale {
            background: #457b9d;
        }

        .info h2 {
            margin: 0 0 4px;
            font-size: 1.2em;
            color: #1d3557;
        }

        .info .category {
            font-size: .85em;
            color: #555;
            margin-bottom: 12px;
            border-bottom: 1px solid #bbe1fa;
            padding-bottom: 8px;
        }

        .info .price {
            margin: 12px 0;
            font-weight: bold;
            color: #1d3557;
        }

        .info .price .discount {
            text-decoration: line-through;
            color: #888;
            margin-right: 8px;
        }

        .buttons {
            margin: 12px 0;
        }

        .buttons button {
            padding: 8px 14px;
            margin-right: 8px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: .9em;
        }

        .buttons .add {
            background: #e63946;
            color: #fff;
        }

        .buttons .info-btn {
            background: #a8dadc;
            color: #1d3557;
        }

        .rating {
            margin-top: auto;
            font-size: .85em;
            color: #f4a261;
        }
    </style>
</head>

<body>
    <h1 style="text-align: center;">Danh sách sản phẩm</h1>
    <div class="products">
        <?php foreach ($products as $p): ?>
            <div class="product">
                <img src="<?= htmlspecialchars($p['image']) ?>" alt="<?= htmlspecialchars($p['name']) ?>">
                <div class="info">
                    <?php if ($p['label']): ?>
                        <div class="badge <?= htmlspecialchars($p['label_class']) ?>"><?= htmlspecialchars($p['label']) ?></div>
                    <?php endif; ?>
                    <h2><?= htmlspecialchars($p['name']) ?></h2>
                    <div class="category"><?= htmlspecialchars($p['category']) ?></div>
                    <div class="price">
                        <span class="discount"><?= number_format($p['price'], 0, '.', ',') ?>$</span>
                        <span><?= number_format($p['discount'], 0, '.', ',') ?>$</span>
                    </div>
                    <div class="buttons">
                        <button class="add">Add to cart</button>
                        <button class="info-btn">More info</button>
                    </div>
                    <div class="rating">Rating: <?= str_repeat('★', $p['rating']) . str_repeat('☆', 5 - $p['rating']) ?></div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>