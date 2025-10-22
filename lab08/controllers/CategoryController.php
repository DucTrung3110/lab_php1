<?php
require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../models/Category.php';

class CategoryController
{
    protected $categoryModel;

    public function __construct()
    {
        $db = Database::connect();
        $this->categoryModel = new Category($db);
    }

    public function listCategories()
    {
        $categories = $this->categoryModel->getAllCategories();
        include __DIR__ . '/../views/category_list.php';
    }
}
