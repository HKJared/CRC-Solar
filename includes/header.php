<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CRC GROUP</title>
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<script>
    function changeTitle(newTitle) {
        document.title = newTitle;
    }

    document.addEventListener("DOMContentLoaded", function() {
        var language = document.querySelector('.top-language');
        var lang1 = language.querySelector('.lang1');

        // Bắt sự kiện khi di chuột vào
        language.addEventListener('mouseenter', function() {
            $(lang1).stop().slideDown();
        });
        // Bắt sự kiện khi di chuột ra
        language.addEventListener('mouseleave', function() {
            $(lang1).stop().slideUp();
        });
    });
</script>

<body>
    <div class="top-header row">
        <div class="contact row">
            <span><i class="fa-solid fa-phone" style="font-size: 14px;"></i> 0399 348 xxx</span>
            <span><i class="fa-solid fa-envelope"></i> admin@crcsolar.com.vn</span>
        </div>
    </div>
    <header>
        <div class="menu-container">
            <div class="logo center">
                <img src="images/logo.png" alt="CRC Solar Logo" style="width: 180px;">
            </div>
            <ul class="center" id="main-menu">
                <li><a href="home">Trang chủ</a></li>
                <li>
                    <a href="about">Giới thiệu</a>
                    <ul class="sub-menu">
                        <li><a href="">Thư ngỏ</a></li>
                        <li><a href="staff.php">Con người CRC Solar</a></li>
                        <li><a href="vision.php">Tầm nhìn chiến lược</a></li>
                        <li><a href="responsibility.php">Trách nhiệm xã hội</a></li>
                    </ul>
                </li>
                <li>
                    <a href="product.php">Sản phẩm</a>
                    <ul class="sub-menu">
                        <li><a href="Crc-60Mhm-166.php">CRC 60Mhm - 166</a></li>
                        <li><a href="Crc-72Mhm-166.php">CRC 72Mhm - 166</a></li>
                        <li><a href="technology.php">Công nghệ</a></li>
                        <li><a href="quality.php">Chất lượng</a></li>
                    </ul>
                </li>
                <li>
                    <a href="">Tin tức & sự kiện</a>
                    <ul class="sub-menu">
                        <li><a href="news.php">Tin tức</a></li>
                        <li><a href="">Ứng dụng - Công nghệ</a></li>
                        <li><a href="pictures.php">Thư viện ảnh</a></li>
                        <li><a href="FAQs.php">Hỏi đáp</a></li>
                        <li><a href="">Các dự án đã triển khai</a></li>
                        <li><a href="">Tải tài liệu</a></li>
                    </ul>
                </li>
                <li>
                    <a href="">Liên hệ</a>
                    <ul class="sub-menu">
                        <li><a href="recruitment.php">Tuyển dụng</a></li>
                        <li><a href="contact.php">Thông tin liên hệ</a></li>
                    </ul>
                </li>
            </ul>
            <div class="language-container center">
                <div class="top-language">
                    <span><img src="/images/language-vn.jpg" width="16">&nbsp;VN</span>
                    <ul class="lang1">
                        <li><a href="/cn/"><span><img src="/images/language-cn.jpg" width="16" height="12">&nbsp;CN</span></a></li>
                        <li><a href="/en/"><span><img src="/images/language-en.jpg" width="16" height="12">&nbsp;EN</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>