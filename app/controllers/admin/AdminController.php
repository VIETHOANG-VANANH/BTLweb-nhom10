<?php
class AdminController {
    public function dashboard() {
        
        session_start();

        if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'admin') {
            header('Location: index.php?action=login');
            exit;
        }

        include 'app/views/admin/dashboard.php';
    }
}
?>
