<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CRC GROUP</title>
    <link rel="icon" href="/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/style.css">
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
                <img src="/images/logo.png" alt="CRC Solar Logo" style="width: 180px;">
            </div>
            <ul class="center" id="main-menu">
                <li><a href="home">Home</a></li>
                <li>
                    <a href="about.php">About Us</a>
                    <ul class="sub-menu">
                        <li><a href="">Welcome Letter</a></li>
                        <li><a href="staff">Our People</a></li>
                        <li><a href="vision">Strategic Vision</a></li>
                        <li><a href="responsibility">Social Responsibility</a></li>
                    </ul>
                </li>
                <li>
                    <a href="product">Products</a>
                    <ul class="sub-menu">
                        <li><a href="Crc-60Mhm-166">CRC 60Mhm - 166</a></li>
                        <li><a href="Crc-72Mhm-166">CRC 72Mhm - 166</a></li>
                        <li><a href="technology">Technology</a></li>
                        <li><a href="quality">Quality</a></li>
                    </ul>
                </li>
                <li>
                    <a href="">News & Events</a>
                    <ul class="sub-menu">
                        <li><a href="news">News</a></li>
                        <li><a href="">Applications - Technology</a></li>
                        <li><a href="pictures">Photo Gallery</a></li>
                        <li><a href="FAQs">FAQs</a></li>
                        <li><a href="">Completed Projects</a></li>
                        <li><a href="">Download Documents</a></li>
                    </ul>
                </li>
                <li>
                    <a href="">Contact</a>
                    <ul class="sub-menu">
                        <li><a href="recruitment">Recruitment</a></li>
                        <li><a href="contact">Contact Information</a></li>
                    </ul>
                </li>
            </ul>
            <div class="language-container center">
                <div class="top-language">
                    <span><img src="/images/language-en.jpg" width="16">&nbsp;EN</span>
                    <ul class="lang1">
                        <li><a href="/"><span><img src="/images/language-vn.jpg" width="16" height="12">&nbsp;VN</span></a></li>
                        <li><a href="/cn/"><span><img src="/images/language-cn.jpg" width="16" height="12">&nbsp;CN</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
