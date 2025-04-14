<!-- <?php
session_start();
ob_start();
include "../config/database.php";
if ((isset($_POST['submit'])) && (isset($_POST['submit']))) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
}
?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <title>Login</title>
</head>

<body>
    <?php if (isset($error)): ?>
        <div class="login-error">
            <?= htmlspecialchars($error) ?>
        </div>
    <?php endif; ?>
    <div class="form-login">

        <div class="login">

            <div class="form-log">
                <h2>Login</h2>
                <form action="/index.php?action=login" class="inputlog" method="post">
                    <input class="input2 email2" type="email" name="email" placeholder="Email Address" required>
                    <input class="input2 pass2" type="password" name="password" placeholder="******" required>
                    <button class="input2 sub2" type="submit">Login</button>
                </form>
                <div class="signup-link">
                    Not a user ? <a href="/app/views/auth/register.php">Sgin Up</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>