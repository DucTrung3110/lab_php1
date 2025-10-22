<?php require_once "views/header.php"; ?>
<div class="container">
    <h2>Đăng Nhập</h2>
    <?php
    // Hiển thị thông báo lỗi nếu có
    if (isset($loginMessage) && $loginMessage != "") {
        echo "<p style='color:red;'>" . $loginMessage . "</p>";
    }
    ?>
    <form method="POST" action="index.php?action=login">
        <label>Username:</label>
        <input type="text" name="username" required>
        <br>
        <label>Mật khẩu:</label>
        <input type="password" name="password" required>
        <br>
        <button type="submit">Đăng Nhập</button>
    </form>

</div>
<?php require_once "views/footer.php"; ?>