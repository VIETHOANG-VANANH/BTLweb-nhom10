<?php
require_once 'config/database.php';
//namespace app\models;
class Client {
    // private $conn;

    // // public function __construct() {
    // //     $db = new Database();
    // //     $this->conn = $db->connect();
    // // }

    // public function getUserByEmail($email) {
    //     $stmt = $this->conn->prepare("SELECT * FROM users WHERE email = ?");
    //     $stmt->execute([$email]);
    //     return $stmt->fetch(PDO::FETCH_ASSOC);
    // }

    // public function register($email, $password, $role = 'client') {
    //     // $hash = password_hash($password, PASSWORD_DEFAULT);
    //     // $stmt = $this->conn->prepare("INSERT INTO users (email, password, role) VALUES (?, ?, ?)");
    //     // return $stmt->execute([$email, $hash, $role]);
    //     echo"this is clientmodel in models";
    // }

    public function test(){
        $scon = mysqli_connect("localhost","root","","dki-dnhap");
        mysqli_set_charset($scon, 'utf8');

        if(mysqli_connect_errno()){
            echo 'Conect_error' . mysqli_connect_error();
        }

        $result = $scon->query('SELECT * FROM user');

        $posts = array();

        if($result->num_rows > 0){
            while($post = mysqli_fetch_assoc($result)){
                $posts[] = $post;
            }
        }

        return $posts;
    }

    // public function login($email, $password) {
    //     $user = $this->getUserByEmail($email);
    //     if ($user && password_verify($password, $user['password'])) {
    //         return $user;
    //     }
    //     return false;
    // }
}
