<?php include('../includes/header_cn.php'); ?>
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
                <h1>常见问题</h1>
            </div>
            <div class="faqs-container row">
                <div class="left">
                    <div class="nav-faqs">
                        <ul>
                            <li><a href="#faqs1">关于我们</a></li>
                            <li><a href="#faqs2">CRC Solar信息</a></li>
                            <li><a href="#faqs3">产品咨询</a></li>
                        </ul>
                    </div>
                </div>
                <div class="right">
                    <div id="faqs1">
                        <h1>关于我们</h1>
                        <ul>
                            <li class="answer-container">
                                <h3>1.&nbsp;&nbsp;&nbsp;&nbsp; 为什么选择CRC Solar？</h3>
                                <div class="answer">
                                    <p><strong>为什么选择CRC Solar？</strong> <br><br>
                                    CRC Solar是一家领先的提供商，拥有先进的技术和高质量的产品，确保最佳性能和卓越的耐久性。我们致力于为客户和社区提供可持续的价值。</p>
                                </div>
                            </li>
                            <li class="answer-container">
                                <h3>2.&nbsp;&nbsp;&nbsp;&nbsp; 我在哪里可以找到关于CRC Solar的文档？</h3>
                                <div class="answer">
                                    <p><strong>我在哪里可以找到关于CRC Solar的文档？</strong> <br><br>
                                    您可以在我们的官方网站“文档”部分找到有关CRC Solar历史、发展、年度报告和技术文档的资料，或直接联系我们寻求帮助。</p>
                                </div>
                            </li>
                            <li class="answer-container">
                                <h3>3.&nbsp;&nbsp;&nbsp;&nbsp; CRC Solar除了制造外还做什么？</h3>
                                <div class="answer">
                                    <p><strong>CRC Solar除了制造外还做什么？</strong> <br><br>
                                    除了制造，CRC Solar还参与研究和开发活动，以提升产品质量。我们还有各种社区项目和支持计划，旨在促进可持续发展。</p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div id="faqs2">
                        <h1>CRC Solar信息</h1>
                        <ul>
                            <li class="answer-container">
                                <h3>1.&nbsp;&nbsp;&nbsp;&nbsp; 太阳能电站在越南的角色</h3>
                                <div class="answer">
                                    <p><strong>太阳能电站在越南的角色？</strong> <br><br>
                                    太阳能电站在提供清洁和可持续能源、减少对化石燃料依赖以及促进国家可持续发展方面发挥着关键作用。</p>
                                </div>
                            </li>
                            <li class="answer-container">
                                <h3>2.&nbsp;&nbsp;&nbsp;&nbsp; CRC Solar产品的优势</h3>
                                <div class="answer">
                                    <p><strong>CRC Solar产品的优势？</strong> <br><br>
                                    CRC Solar产品配备先进技术，具有高耐久性和稳定性能。我们承诺通过最佳的保修政策和卓越的售后服务保证产品质量。</p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div id="faqs3">
                        <h1>产品咨询</h1>
                        <ul>
                            <li class="answer-container">
                                <h3>1.&nbsp;&nbsp;&nbsp;&nbsp; 我应该选择CRC Solar的哪种产品？</h3>
                                <div class="answer">
                                    <p><strong>我应该选择CRC Solar的哪种产品？</strong> <br><br>
                                    CRC Solar提供多种产品系列，适合家庭和企业需求。您应考虑您的具体需求，并咨询我们的专家以选择最合适的产品。</p>
                                </div>
                            </li>
                            <li class="answer-container">
                                <h3>2.&nbsp;&nbsp;&nbsp;&nbsp; 安装成本</h3>
                                <div class="answer">
                                    <p><strong>安装成本？</strong> <br><br>
                                    太阳能电力系统的安装成本取决于诸多因素，如系统规模、安装位置和具体技术要求。CRC Solar提供多种安装方案，以适应您的预算。</p>
                                </div>
                            </li>
                            <li class="answer-container">
                                <h3>3.&nbsp;&nbsp;&nbsp;&nbsp; 维护政策</h3>
                                <div class="answer">
                                    <p><strong>维护政策？</strong> <br><br>
                                    CRC Solar设有定期维护政策，以确保系统有效运行。我们提供专业的保修服务，快速透明的流程，及时支持我们的客户。</p>
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
<?php include('../includes/footer_cn.php'); ?>
