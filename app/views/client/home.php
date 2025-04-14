<!-- <h1>Chào mừng, <?= $_SESSION['user']['username'] ?>!</h1>
<p>Đây là trang home.</p>
<a href="index.php?action=logout">Đăng xuất</a> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop PoPo - Trang chủ</title>
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
</head>

<body>

    <header class="header">
        <div class="menu">
            <div class="logo">SHOP.POPO</div>

            <nav class="nav">
            <a href="#">Shop</a>
            <a href="#">On Sale</a>
            <a href="#">New Arrivals</a>
            <a href="#">Brands</a>
            </nav>

            <div class="header-right">
                <form class="search-bar" method="GET" action="index.php">
                    <input type="hidden" name="action" value="search">
                    <input type="text" name="keyword" placeholder="Search for products..." required>
                </form>

                <div class="icons">
                    <a href="index.php?action=cart">
                        <img src="../assets/image/shopping-cart.png" alt="Cart" class="icon-img">
                    </a>
                    <a href="index.php?action=account">
                        <img src="../assets/image/user-interface.png" alt="User" class="icon-img">
                    
                    </a>
                </div>
            </div>
            
            
        </div>
    </header>

</body>

</html>