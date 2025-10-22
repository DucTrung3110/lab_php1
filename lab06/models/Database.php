<?php
require_once "config.php";

class Database
{
    public $conn;

    public function __construct()
    {
        global $conn;
        $this->conn = $conn;
    }
}
