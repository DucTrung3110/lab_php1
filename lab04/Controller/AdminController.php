<?php
require_once 'Controller.php';
class AdminController extends Controller
{
    public function index()
    {
        $this->render('admin');
    }
}
