<?php require_once "views/header.php"; ?>
<div class="container">
    <h2>Đăng Ký</h2>
    <?php
    // Hiển thị thông báo nếu có
    if (isset($registerMessage) && $registerMessage != "") {
        echo "<p style='color:red;'>" . $registerMessage . "</p>";
    }
    ?>
    <form method="POST" action="index.php?action=register">
        <label>Username:</label>
        <input type="text" name="username" required>
        <br>
        <label>Email:</label>
        <input type="email" name="email" required>
        <br>
        <label>Mật khẩu:</label>
        <input type="password" name="password" required>
        <br>
        <label>Nhập lại mật khẩu:</label>
        <input type="password" name="confirm_password" required>
        <br>
        <button type="submit">Đăng Ký</button>
    </form>
</div>
<?php require_once "views/footer.php"; ?>