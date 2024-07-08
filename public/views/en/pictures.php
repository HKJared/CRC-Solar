<?php include('../includes/header_en.php'); ?>
<link rel="stylesheet" href="/css/pictures.css">
<main class="center">
    <div class="slogan top-main center column">
        <h1>Photo Library</h1>
    </div>
    <div class="main center column">
        <div class="block block1 column">
            <div class="top-block">
                <span>Curated Photos</span>
            </div>
            <h1>Some curated photos of CRC Solar</h1>
            <div class="pictures-container">
                <div>    
                    <img src="/images/slide1.jpg" class="picture" alt="">
                </div>
                <div>
                    <img src="/images/slide2.jpg" class="picture" alt="">
                </div>
                <div>
                    <img src="/images/slide3.jpg" class="picture" alt="">
                </div>            
                <div>
                    <img src="/images/slide4.jpg" class="picture" alt="">
                </div>
                <div>
                    <img src="/images/slide5.jpg" class="picture" alt="">
                </div>
                <div>
                    <img src="/images/news1.jpg" class="picture" alt="">
                </div>
                <div>
                    <img src="/images/news2.jpg" class="picture" alt="">
                </div>
                <div>
                    <img src="/images/news3.jpg" class="picture" alt="">
                </div>
                <div>
                    <img src="/images/news4.jpg" class="picture" alt="">
                </div>
                <div>
                    <img src="/images/news5.jpg" class="picture" alt="">
                </div>
                <div>
                    <img src="/images/demo1.jpg" class="picture" alt="">
                </div>
                <div>
                    <img src="/images/demo2.jpg" class="picture" alt="">
                </div>
            </div>
            <div class="show-more">
                <button type="button">
                    <div class="background"></div>
                    <a href="#">View More</a>
                </button>
            </div>
        </div>
    </div>
</main>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const pictureDivs = document.querySelectorAll('.pictures-container > div');
        const classes = ['wide', 'tall', 'big'];

        pictureDivs.forEach(div => {
            // Randomly decide whether to add a class or not
            if (Math.random() < 0.5) {
                const randomClass = classes[Math.floor(Math.random() * classes.length)];
                div.classList.add(randomClass);
            }
        });
    });

</script>
<?php include('../includes/footer_en.php'); ?>
