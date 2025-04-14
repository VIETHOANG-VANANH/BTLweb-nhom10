<?php

session_start();

require_once 'app/controllers/AuthController.php';
require_once 'app/controllers/HomeController.php';

$auth = new AuthController();
$home = new HomeController();

$action = $_GET['action'] ?? 'login';

switch ($action) {

    case 'register':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $auth->register();
        } else {
            $auth->showRegister();
        }
        break;

    case 'login':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $auth->login(); // xử lý đăng nhập
        } else {
            $auth->showLogin(); // hiển thị form đăng nhập
        }
        break;

    case 'logout':
        $auth->logout();
        break;

    case 'home':
        $home->index();
        break;

    case 'dashboard':
        // Kiểm tra nếu chưa đăng nhập hoặc không phải admin thì không cho truy cập
        if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'admin') {
            header('Location: index.php?action=login');
            exit;
        }

        include 'app/views/admin/dashboard.php';
        break;

    default:
        $auth->showLogin();
        break;
}
?>