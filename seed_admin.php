 <?php
// require_once 'app/models/User.php';

// $userModel = new User();

// $username = 'Admin';
// $email = 'admin@example.com';
// $password = 'admin123'; // Mật khẩu bạn muốn

// // Chèn tài khoản admin nếu chưa tồn tại
// if (!$userModel->isEmailExists($email)) {
//     $db = Database::getInstance()->getConnection();
//     $stmt = $db->prepare("INSERT INTO Users_list (username, email, password, role) VALUES (?, ?, ?, ?)");
//     $stmt->execute([
//         $username,
//         $email,
//         password_hash($password, PASSWORD_DEFAULT),
//         'admin'
//     ]);
//     echo "Tạo tài khoản admin thành công!";
// } else {
//     echo "Email admin đã tồn tại!";
// } 
