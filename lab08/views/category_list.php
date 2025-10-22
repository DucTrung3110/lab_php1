<?php include 'header.php'; ?>
<h2>Danh Mục Sản Phẩm</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Tên Danh Mục</th>
    </tr>
    <?php foreach ($categories as $category): ?>
        <tr>
            <td><?= $category['id'] ?></td>
            <td><?= $category['name'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>
<?php include 'footer.php'; ?>