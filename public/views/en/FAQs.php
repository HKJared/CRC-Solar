<?php include('../includes/header_en.php'); ?>
<link rel="stylesheet" href="/css/FAQs.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<main class="center">
    <div class="slogan top-main center column">
        <h1>FAQs</h1>
    </div>
    <div class="main center column">
        <div class="block block1 column">
            <div class="top-block">
                <span>FAQs</span>
                <h1>Frequently Asked Questions</h1>
            </div>
            <div class="faqs-container row">
                <div class="left">
                    <div class="nav-faqs">
                        <ul>
                            <li><a href="#faqs1">About Us</a></li>
                            <li><a href="#faqs2">Information about CRC Solar</a></li>
                            <li><a href="#faqs3">Product Consultation</a></li>
                        </ul>
                    </div>
                </div>
                <div class="right">
                    <div id="faqs1">
                        <h1>About Us</h1>
                        <ul>
                            <li class="answer-container">
                                <h3>1.&nbsp;&nbsp;&nbsp;&nbsp; Why choose CRC Solar?</h3>
                                <div class="answer">
                                    <p><strong>Why choose CRC Solar?</strong> <br><br>
                                    CRC Solar is a leading provider with advanced technology and high-quality products, ensuring optimal performance and superior durability. We are committed to delivering sustainable value to customers and the community.</p>
                                </div>
                            </li>
                            <li class="answer-container">
                                <h3>2.&nbsp;&nbsp;&nbsp;&nbsp; Where can I find documentation about CRC Solar?</h3>
                                <div class="answer">
                                    <p><strong>Where can I find documentation about CRC Solar?</strong> <br><br>
                                    You can find documentation about CRC Solar's history, development, annual reports, and technical documents on our official website under the "Documentation" section or contact us directly for assistance.</p>
                                </div>
                            </li>
                            <li class="answer-container">
                                <h3>3.&nbsp;&nbsp;&nbsp;&nbsp; What else does CRC Solar do besides manufacturing?</h3>
                                <div class="answer">
                                    <p><strong>What else does CRC Solar do besides manufacturing?</strong> <br><br>
                                    In addition to manufacturing, CRC Solar engages in research and development activities to enhance product quality. We also have various community projects and support programs aimed at promoting sustainable development.</p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div id="faqs2">
                        <h1>Information about CRC Solar</h1>
                        <ul>
                            <li class="answer-container">
                                <h3>1.&nbsp;&nbsp;&nbsp;&nbsp; Role of solar power plants in Vietnam</h3>
                                <div class="answer">
                                    <p><strong>Role of solar power plants in Vietnam?</strong> <br><br>
                                    Solar power plants play a crucial role in providing clean and sustainable energy, reducing dependence on fossil fuels, and contributing to the sustainable development of the country.</p>
                                </div>
                            </li>
                            <li class="answer-container">
                                <h3>2.&nbsp;&nbsp;&nbsp;&nbsp; Advantages of CRC Solar products</h3>
                                <div class="answer">
                                    <p><strong>Advantages of CRC Solar products?</strong> <br><br>
                                    CRC Solar products are equipped with advanced technology, high durability, and stable performance. We commit to product quality with the best warranty policies and excellent after-sales service.</p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div id="faqs3">
                        <h1>Product Consultation</h1>
                        <ul>
                            <li class="answer-container">
                                <h3>1.&nbsp;&nbsp;&nbsp;&nbsp; Which CRC Solar product should I choose?</h3>
                                <div class="answer">
                                    <p><strong>Which CRC Solar product should I choose?</strong> <br><br>
                                    CRC Solar offers a variety of product lines suitable for both household and business needs. You should consider your specific requirements and consult our experts to choose the most suitable product.</p>
                                </div>
                            </li>
                            <li class="answer-container">
                                <h3>2.&nbsp;&nbsp;&nbsp;&nbsp; Installation costs</h3>
                                <div class="answer">
                                    <p><strong>Installation costs?</strong> <br><br>
                                    The installation cost of a solar power system depends on various factors such as system scale, installation location, and specific technical requirements. CRC Solar offers various installation packages to fit your budget.</p>
                                </div>
                            </li>
                            <li class="answer-container">
                                <h3>3.&nbsp;&nbsp;&nbsp;&nbsp; Maintenance policies</h3>
                                <div class="answer">
                                    <p><strong>Maintenance policies?</strong> <br><br>
                                    CRC Solar has regular maintenance policies to ensure efficient system operation. We provide professional warranty services with fast and transparent procedures to support our customers promptly.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script>
    document.querySelectorAll('.nav-faqs a').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href').substring(1); // Get the ID of the linked element
            const targetElement = document.getElementById(targetId); // Find the element by ID
            
            if (targetElement) {
                const offsetTop = targetElement.offsetTop - 80; // Adjust scroll position to account for header
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth' // Smooth scrolling
                });
            }
        });
    });

    document.addEventListener("DOMContentLoaded", function() {
        var answerContainers = document.querySelectorAll('.answer-container');

        answerContainers.forEach(function(answerContainer) {
            answerContainer.addEventListener('click', function() {
                var answer = answerContainer.querySelector('.answer');

                // Check the current state of the answer
                if (answer.style.display === 'block') {
                    // If displayed, hide it
                    $(answer).slideUp();
                } else {
                    // If hidden, display it
                    $(answer).slideDown();
                }
            });
        });
    });
</script>
<?php include('../includes/footer_en.php'); ?>
