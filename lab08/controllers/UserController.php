<?php
require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../models/User.php';

class UserController
{
    protected $userModel;

    public function __construct()
    {
        $db = Database::connect();
        $this->userModel = new User($db);
    }

    public function listUsers()
    {
        $users = $this->userModel->getAllUsers();
        include __DIR__ . '/../views/user_list.php';
    }
}
