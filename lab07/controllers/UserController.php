<?php
require_once "models/User.php";

class UserController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new User();
    }

    // Xử lý đăng nhập
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = trim($_POST['username'] ?? '');
            $password = trim($_POST['password'] ?? '');
            $user = $this->userModel->login($username, $password);
            if ($user) {
                session_start();
                $_SESSION['user'] = $user;
                header("Location: index.php?action=dashboard");
                exit;
            } else {
                return "Đăng nhập thất bại. Kiểm tra lại username hoặc mật khẩu.";
            }
        }
        return "";
    }

    // Xử lý đăng ký
    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'] ?? '';
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';
            $confirm = $_POST['confirm_password'] ?? '';

            if ($password !== $confirm) {
                return "Mật khẩu không khớp!";
            }

            $result = $this->userModel->register($username, $email, $password);
            if ($result) {
                return "Đăng ký thành công. Hãy đăng nhập!";
            } else {
                return "Đăng ký thất bại. Username hoặc email đã tồn tại.";
            }
        }
        return "";
    }
}
