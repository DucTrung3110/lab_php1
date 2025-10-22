<?php
// Model xử lý dữ liệu sản phẩm
function getProducts()
{
    // Giả lập dữ liệu
    return [
        ['id' => 1, 'name' => 'Laptop Dell', 'price' => 15000000],
        ['id' => 2, 'name' => 'iPhone 15', 'price' => 25000000],
        ['id' => 3, 'name' => 'Samsung Galaxy', 'price' => 18000000],
        ['id' => 4, 'name' => 'MacBook Pro', 'price' => 35000000],
    ];
}

function getProductById($id)
{
    foreach (getProducts() as $p) {
        if ($p['id'] == $id) return $p;
    }
    return null;
}
