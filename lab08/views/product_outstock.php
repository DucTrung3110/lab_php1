<?php include 'header.php'; ?>
<h2>Sản Phẩm Hết Hàng</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Tên Sản Phẩm</th>
        <th>Số Lượng Tồn</th>
    </tr>
    <?php foreach ($products as $product): ?>
        <tr>
            <td><?= $product['id'] ?></td>
            <td><?= $product['name'] ?></td>
            <td><?= $product['stock'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>
<?php include 'footer.php'; ?>