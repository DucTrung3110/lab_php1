<?php include 'header.php'; ?>
<h2>Sản Phẩm Bán Chạy</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Tên Sản Phẩm</th>
        <th>Số Lượng Đã Bán</th>
    </tr>
    <?php foreach ($products as $product): ?>
        <tr>
            <td><?= $product['id'] ?></td>
            <td><?= $product['name'] ?></td>
            <td><?= $product['sold_quantity'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>
<?php include 'footer.php'; ?>