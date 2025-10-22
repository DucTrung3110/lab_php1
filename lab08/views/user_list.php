<?php include 'header.php'; ?>
<h2>Danh Sách Người Dùng</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Tên Người Dùng</th>
        <th>Email</th>
    </tr>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['username'] ?></td>
            <td><?= $user['email'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>
<?php include 'footer.php'; ?>