<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
    <header>
        <div class="logo">
            <a href="index.php?act=home"><img src="./img/Olive Green Pink Modern Minimalist Company Logo (1).png" alt=""></a>
        </div>
        <nav>
            <ul>
                <li><a href="index.php?act=iphone">Iphone</a></li>
                <li><a href="index.php?act=mac">Mac</a></li>
                <li><a href="index.php?act=watch">Watch</a></li>
                <li><a href="index.php?act=phu_kien">Phụ kiện</a></li>
                <li><a href="index.php?act=sanpham">Phụ kiện</a></li>
                <!-- <li><a href="#">Giầy chạy bộ</a></li> -->
            </ul>
        </nav>
        <div class="header_right">
            <div class="search">
                <form action="" method="POST">
                    <input type="text" placeholder="Tìm kiếm từ khóa">
                    <div class="search_icon">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </form>
            </div>
            <div class="cart">
                <i class="fa-solid fa-cart-shopping"></i>
            </div>
            <div class="login">
                <i class="fa-solid fa-user"></i>
                <ul>
                    <li><a href="index.php?act=dang_nhap">Đăng nhập</a></li>
                    <li><a href="index.php?act=dang_ky">Đăng ký</a></li>
                    <li><a href="admin/index.php">Đăng nhập admin</a></li>
                </ul>
            </div>
        </div>
    </header>