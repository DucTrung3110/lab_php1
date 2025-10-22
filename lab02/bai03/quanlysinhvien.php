<?php
require 'sinhvien.php';
session_start();

// Khởi tạo mảng trong session
if (!isset($_SESSION['sv_list'])) {
    $_SESSION['sv_list'] = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy dữ liệu form
    $sv = new SinhVien(
        $_POST['mssv'],
        $_POST['hoten'],
        $_POST['gioitinh'],
        $_POST['ngaysinh'],
        (float)$_POST['diemtb']
    );
    $_SESSION['sv_list'][] = $sv;
    header('Location: quanlysinhvien.php');
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Quản lý SV</title>
</head>

<body>
    <h1>Nhập thông tin sinh viên</h1>
    <form method="post">
        MSSV: <input name="mssv" required><br>
        Họ tên: <input name="hoten" required><br>
        Giới tính:
        <select name="gioitinh">
            <option value="Nam">Nam</option>
            <option value="Nữ">Nữ</option>
        </select><br>
        Ngày sinh: <input type="date" name="ngaysinh" required><br>
        Điểm TB: <input type="number" step="0.01" name="diemtb" required><br>
        <button>Thêm</button>
    </form>

    <h2>Danh sách sinh viên</h2>
    <ul>
        <?php foreach ($_SESSION['sv_list'] as $sv): ?>
            <li><?= htmlspecialchars($sv->HienThiThongTin()) ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>