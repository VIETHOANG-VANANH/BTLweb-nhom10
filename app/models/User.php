<?php
require_once 'core/Database.php';

class User {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function register($username, $email, $password) {
        $stmt = $this->db->prepare("INSERT INTO Users_list (username, email, password) VALUES (?, ?, ?)");
        return $stmt->execute([$username, $email, password_hash($password, PASSWORD_DEFAULT)]);
    }

    public function login($email, $password) {
        $stmt = $this->db->prepare("SELECT * FROM Users_list WHERE email = ? LIMIT 1");
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        
        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }

        return false;
    }

    public function isEmailExists($email) {
        $stmt = $this->db->prepare("SELECT COUNT(*) FROM Users_list WHERE email = ? LIMIT 1");
        $stmt->execute([$email]);
        return $stmt->fetchColumn() > 0;
    }


}
?>
