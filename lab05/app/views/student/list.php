<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Danh sách sinh viên</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            padding: 8px 12px;
            border: 1px solid #ccc;
            text-align: left;
        }
    </style>
</head>

<body>
    <h1>Danh sách sinh viên</h1>
    <?php if (!empty($students)) { ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên sinh viên</th>
                    <th>Email</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($students as $student) { ?>
                    <tr>
                        <td><?php echo $student['id']; ?></td>
                        <td><?php echo $student['name']; ?></td>
                        <td><?php echo $student['email']; ?></td>
                        <td>
                            <a href="index.php?action=detail&id=<?php echo $student['id']; ?>">Xem chi tiết</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php } else { ?>
        <p>Không có dữ liệu sinh viên.</p>
    <?php } ?>
</body>

</html>