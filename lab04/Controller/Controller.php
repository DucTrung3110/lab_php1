<?php
class Controller
{
    public function render(string $view, array $data = [])
    {
        extract($data);
        include __DIR__ . "/../Views/header.php";
        include __DIR__ . "/../Views/{$view}.php";
        include __DIR__ . "/../Views/footer.php";
    }
}
