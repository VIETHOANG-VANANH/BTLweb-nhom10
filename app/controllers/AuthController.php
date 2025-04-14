<?php


require_once 'app/models/User.php';

class AuthController {
    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    public function showLogin() {
        require 'app/views/auth/login.php';
    }

    public function showRegister() {
        require 'app/views/auth/register.php';
    }

    public function login() {
        
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        

        $email    = $_POST['email'];
        $password = $_POST['password'];


        $user = $this->userModel->login($email, $password);

        if ($user) {
            $_SESSION['user'] = $user;

            // Kiểm tra quyền (kiểm tra role để chuyển đúng trang)
            if ($user['role'] === 'admin') {
                header('Location: index.php?action=dashboard');
            } else {
                header('Location: index.php?action=home');
            }

            // //  Chuyển hướng tới trang home
            // header('Location: index.php?action=home');
            // exit;

        } else {
            $error = "Email hoặc mật khẩu không đúng.";
            include 'app/views/auth/login.php';
        }

    }

    public function register() {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];


        // Giữ lại dữ liệu để hiển thị lại nếu có lỗi
        $old_username = $username;
        $old_email = $email;

        //kiểm tra độ dài mật khẩu
        if (strlen($password) < 6) {
            $error = "Mật khẩu phải có ít nhất 6 ký tự.";
            include __DIR__ . '/../views/auth/register.php';
            return;
        }

        // Kiểm tra email trùng
        if ($this->userModel->isEmailExists($email)) {
            $error = "Email đã được đăng ký.";
            include __DIR__ . '/../views/auth/register.php';
            return;
        }
        
        if ($this->userModel->register($username, $email, $password)) {
            $success = "Đăng ký tài khoản thành công!";
            include __DIR__ . '/../views/auth/register.php';
        } else {
            $error = "Đã xảy ra lỗi khi đăng ký! Vui lòng thử lại.";
            include __DIR__ . '/../views/auth/register.php';
        }

    }

    public function logout() {
        session_start();
        session_destroy();
        header("Location: index.php");
    }
}
?>
