<?php
require_once "Database.php";

class User
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    // Hàm đăng nhập: kiểm tra username và mật khẩu
    public function login($username, $password)
    {
        $query = "SELECT * FROM users WHERE username = :username LIMIT 1";
        $stmt = $this->db->conn->prepare($query);
        $stmt->bindValue(":username", $username, PDO::PARAM_STR);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            // Nếu password_verify đúng thì trả về user
            if (password_verify($password, $user['password'])) {
                return $user;
            }
            // Nếu mật khẩu lưu là plain text và trùng khớp, thì hash lại và cập nhật vào DB
            if ($password === $user['password']) {
                $hashed = password_hash($password, PASSWORD_DEFAULT);
                $update = "UPDATE users SET password = :password WHERE id = :id";
                $updateStmt = $this->db->conn->prepare($update);
                $updateStmt->bindValue(":password", $hashed, PDO::PARAM_STR);
                $updateStmt->bindValue(":id", $user['id'], PDO::PARAM_INT);
                $updateStmt->execute();
                // Sau khi cập nhật, trả về user
                $user['password'] = $hashed;
                return $user;
            }
        }
        return false;
    }


    // Hàm đăng ký: kiểm tra trùng lặp và thêm người dùng mới
    public function register($username, $email, $password)
    {
        // Kiểm tra xem username hoặc email đã tồn tại chưa
        $query = "SELECT * FROM users WHERE username = :username OR email = :email";
        $stmt = $this->db->conn->prepare($query);
        $stmt->bindValue(":username", $username, PDO::PARAM_STR);
        $stmt->bindValue(":email", $email, PDO::PARAM_STR);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            return false; // Người dùng đã tồn tại
        }
        // Mã hóa mật khẩu
        $hashed = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO users(username, email, password) VALUES (:username, :email, :password)";
        $stmt = $this->db->conn->prepare($query);
        $stmt->bindValue(":username", $username, PDO::PARAM_STR);
        $stmt->bindValue(":email", $email, PDO::PARAM_STR);
        $stmt->bindValue(":password", $hashed, PDO::PARAM_STR);
        return $stmt->execute();
    }
}
