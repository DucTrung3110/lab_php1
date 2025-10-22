<?php
// Kiểm tra xem người dùng đã đăng nhập chưa
function isLoggedIn()
{
    return isset($_SESSION['user']);
}

// Thực hiện đăng nhập
function doLogin($username, $password)
{
    $users = ['admin' => '123456', 'user' => 'password'];
    if (isset($users[$username]) && $users[$username] === $password) {
        $_SESSION['user'] = $username;
        return true;
    }
    return false;
}

// Đăng xuất
function doLogout()
{
    session_unset();
    session_destroy();
}
