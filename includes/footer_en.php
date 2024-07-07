<footer class="center column">
    <button class="to-top-btn"><i class="fa-solid fa-chevron-up"></i></button>
    <div class="footer-container row">
        <div class="more-info">
            <h3>CRC GROUP</h3>
            <p style="text-align: justify; text-align-last: left;">CRC SOLAR specializes in providing, constructing, and implementing solar panel installation projects for locations such as industrial parks, residential areas, and solar power plants. Suitable for all needs in terms of scale and size.</p>
        </div>
        <div class="more-info">
            <h3>More Info</h3>
            <ul class="links-container column">
                <li class="link"><a href="">Recruitment</a></li>
                <li class="link"><a href="contact">FAQs</a></li>
                <li class="link"><a href="">Photo Gallery</a></li>
                <br>
                <li class="link"><a href="">Privacy Policy</a></li>
            </ul>
        </div>
        <div class="more-info">
            <h3>Contact Us</h3>
            <ul class="contacts-container column">
                <li class="contact row">
                    <i class="fa-solid fa-envelope"></i>
                    <span>admin@crcsolar.com.vn</span>
                </li>
                <li class="contact row">
                    <i class="fa-solid fa-phone" style="font-size: 14px;"></i>
                    <span>02186 259 232 <br>0982 484 803</span>
                </li>
                <li class="contact row">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>Lot 9, Road No. 1, Luong Son Industrial Park, Hoa Son, Luong Son, Hoa Binh. <br> <br>104/140 Khuat Duy Tien, Nhan Chinh, Thanh Xuan, Hanoi.</span>
                </li>
            </ul>
        </div>
        <div class="more-info">
            <h3>Get Updates</h3>
            <span>Be the first to receive the latest information from us</span>
            <form id="add-email" action="#" class="row">
                <input type="text" placeholder="Example@gmail.com">
                <button type="button"><i class="fa-solid fa-paper-plane"></i></button>
            </form>
        </div>
    </div>
    <div class="footer-bottom center">
        <span>Copyright <i class="fa-regular fa-copyright"></i> CRC Solar 2024.</span>
    </div>
</footer>
</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var video = document.getElementById('myVideo');

        // Check if video element exists
        if (!video) {
            console.error('Video element not found.');
            return; // Exit function if video element is not found
        }

        // Function to check if element is in viewport
        function isElementInViewport(el) {
            if (!el) return false; // Handle edge case where element is null
            var rect = el.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }

        // Function to start video when in viewport
        function checkVideo() {
            if (isElementInViewport(video)) {
                video.play();
                // Remove scroll event listener once video starts playing
                window.removeEventListener('scroll', checkVideo);
            }
        }

        // Add scroll event listener to check when video comes into viewport
        window.addEventListener('scroll', checkVideo);

        // Check video visibility when the page loads
        checkVideo();
    });

    document.addEventListener("DOMContentLoaded", function() {
        // Function to create the count-up effect
        function countUp(element, finalValue, hasPlus) {
            let count = 0;
            let increment = finalValue / 100; // Adjust the increment value for speed
            let interval = setInterval(function() {
                count += increment;
                if (count >= finalValue) {
                    clearInterval(interval);
                    count = finalValue;
                }
                element.textContent = Math.floor(count) + (hasPlus ? '+' : '');
            }, 10); // Adjust the interval time for smoother effect
        }

        // Observe when the element comes into view
        let observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    let cntNum = entry.target;
                    let finalText = cntNum.textContent;
                    let hasPlus = finalText.includes('+');
                    let finalValue = parseInt(finalText, 10);
                    countUp(cntNum, finalValue, hasPlus);
                    cntNum.classList.add('visible');
                    observer.unobserve(cntNum);
                }
            });
        }, {
            threshold: 0.5
        });

        // Attach the observer to each .cnt-num element
        document.querySelectorAll('.cnt-num').forEach(cntNum => {
            observer.observe(cntNum);
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        var toTopBtn = document.querySelector('.to-top-btn');

        window.addEventListener('scroll', function() {
            if (window.scrollY > 100) {
                toTopBtn.classList.add('show');
            } else {
                toTopBtn.classList.remove('show');
            }
        });

        toTopBtn.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    });
</script>

</html>
