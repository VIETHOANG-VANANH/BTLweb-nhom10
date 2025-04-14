<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <title>Sign Up</title>
</head>

<body>
    
    <?php if (isset($error)): ?>
        <div class="register-error">
            <?= htmlspecialchars($error) ?>
        </div>
    <?php endif; ?>

    <?php if (isset($success)): ?>
        <div class="register-success">
            <?= htmlspecialchars($success) ?><br>
            <small>Đang chuyển đến trang đăng nhập trong 3 giây...</small>
        </div>

        <script>
            setTimeout(() => {
                window.location.href = "/index.php?action=login"; // ✅ Sửa lại đường dẫn
            }, 3000);
        </script>

    <?php endif; ?>
    <div class="form-signup">
        <div class="signup">
            <div class="form-box">
                <h2>Sign up</h2>
                <form action="/index.php?action=register" class="input" method="post">
                    
                <input class="input1 name" type="name" name="username" value="<?= isset($username) ? htmlspecialchars($username) : '' ?>" placeholder="Full Name">
                    
                    <input class="input1 email" type="email" name="email" value="<?= isset($email) ? htmlspecialchars($email) : '' ?>" placeholder="Email Address">
                    
                    <input class="input1 pass" type="password" name="password" placeholder="******">
                    
                    <button class="input1 sub" type="submit">Create Account</button>
                </form>
                <div class="login-link">

                    Already have an account? <a href="/index.php?action=login">Log In</a>

                </div>
            </div>
        </div>
    </div>
</body>

</html>