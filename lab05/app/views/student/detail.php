<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Chi tiết sinh viên</title>
</head>

<body>
    <h1>Chi tiết sinh viên</h1>
    <?php if (!empty($student)) { ?>
        <p><strong>ID:</strong> <?php echo $student['id']; ?></p>
        <p><strong>Tên:</strong> <?php echo $student['name']; ?></p>
        <p><strong>Email:</strong> <?php echo $student['email']; ?></p>
        <!-- Các trường thông tin khác nếu có -->
        <p>
            <a href="index.php">Quay lại danh sách</a>
        </p>
    <?php } else { ?>
        <p>Sinh viên không tồn tại.</p>
    <?php } ?>
</body>

</html>