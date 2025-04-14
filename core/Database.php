<?php
class Database {
    private static $instance = null;
    private $conn;

    private $host = "localhost";
    private $db = "dki-dnhap";
    private $user = "root";
    private $pass = "";

    private function __construct() {
        $this->conn = new PDO("mysql:host=$this->host;dbname=$this->db;charset=utf8", $this->user, $this->pass);
    }

    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->conn;
    }
}
?>
