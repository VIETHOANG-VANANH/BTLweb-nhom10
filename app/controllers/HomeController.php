<?php
class HomeController {
    public function index() {
        if (!isset($_SESSION['user'])) {
            header('Location: index.php?action=login');
            exit;
        }

        include 'app/views/client/home.php';
    }
}
