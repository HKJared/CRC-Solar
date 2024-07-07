<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <title>CRC GROUP</title>
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
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
                <li><a href="home">首页</a></li>
                <li>
                    <a href="about">关于我们</a>
                    <ul class="sub-menu">
                        <li><a href="">致辞</a></li>
                        <li><a href="staff">CRC Solar团队</a></li>
                        <li><a href="vision">战略愿景</a></li>
                        <li><a href="responsibility">社会责任</a></li>
                    </ul>
                </li>
                <li>
                    <a href="product">产品</a>
                    <ul class="sub-menu">
                        <li><a href="Crc-60Mhm-166">CRC 60Mhm - 166</a></li>
                        <li><a href="Crc-72Mhm-166">CRC 72Mhm - 166</a></li>
                        <li><a href="technology">技术</a></li>
                        <li><a href="quality">质量</a></li>
                    </ul>
                </li>
                <li>
                    <a href="">新闻与事件</a>
                    <ul class="sub-menu">
                        <li><a href="news">新闻</a></li>
                        <li><a href="">应用与技术</a></li>
                        <li><a href="pictures">图片库</a></li>
                        <li><a href="FAQs">常见问题解答</a></li>
                        <li><a href="">已完成项目</a></li>
                        <li><a href="">下载资料</a></li>
                    </ul>
                </li>
                <li>
                    <a href="">联系我们</a>
                    <ul class="sub-menu">
                        <li><a href="recruitment">招聘</a></li>
                        <li><a href="contact">联系信息</a></li>
                    </ul>
                </li>
            </ul>
            <div class="language-container center">
                <div class="top-language">
                    <span><img src="/images/language-cn.jpg" width="16" height="12">&nbsp;CN</span>
                    <ul class="lang1">
                        <li><a href="/vn/"><span><img src="/images/language-vn.jpg" width="16">&nbsp;VN</span></a></li>
                        <li><a href="/en/"><span><img src="/images/language-en.jpg" width="16">&nbsp;EN</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>