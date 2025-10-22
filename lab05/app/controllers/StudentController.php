<?php
require_once __DIR__ . '/../models/Student.php';

class StudentController
{
    private $studentModel;

    public function __construct()
    {
        $this->studentModel = new Student();
    }

    // Hiển thị danh sách sinh viên
    public function index()
    {
        $students = $this->studentModel->getAllStudents();
        include __DIR__ . '/../views/student/list.php';
    }

    // Hiển thị chi tiết sinh viên
    public function detail()
    {
        if (isset($_GET['id']) && is_numeric($_GET['id'])) {
            $id = intval($_GET['id']);
            $student = $this->studentModel->getStudentById($id);
            if ($student) {
                include __DIR__ . '/../views/student/detail.php';
            } else {
                echo "Không tìm thấy sinh viên với ID đã cho.";
            }
        } else {
            echo "ID không hợp lệ hoặc không được truyền vào.";
        }
    }

    // (Bài 3) Hiển thị danh sách sinh viên theo danh mục
    public function category()
    {
        if (isset($_GET['category_id']) && is_numeric($_GET['category_id'])) {
            $categoryId = intval($_GET['category_id']);
            $students = $this->studentModel->getStudentsByCategory($categoryId);
            include __DIR__ . '/../views/student/list.php';
        } else {
            echo "Danh mục không hợp lệ.";
        }
    }
}
