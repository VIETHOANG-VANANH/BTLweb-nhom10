<?php
class Database {
    private $host = "localhost"; // Địa chỉ máy chủ
    private $db_name = "dki-dnhap"; // Tên database
    private $username = "root"; // Username MySQL
    private $password = ""; // Mật khẩu (XAMPP mặc định là rỗng)
    public $conn;

    public function connect() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name . ";charset=utf8", 
                                  $this->username, 
                                  $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Lỗi kết nối database: " . $e->getMessage());
        }
        return $this->conn;
    }
}
?>
