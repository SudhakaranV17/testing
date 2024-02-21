<?php
$pageTitle = "Home Page"; // Define the page title
include __DIR__ . '/includes/parts/head.php'; // Include the common head section
?>

<body>
    <?php include __DIR__ . '/includes/parts/header2.php'; ?>

    <section class="home-section">
        <div class="home">
            <div class="home-img">
                <div class="home-img-wrap">
                    <img src="./assests/images/banner.jpg" alt="">
                </div>
            </div>
            <div class="home-content">
                <div class="home-content-left">
                    <h2 class="home-content-left-title">Lorem ipsum dolor sit amet consectetur</h2>
                    <div class="home-content-left-info">
                        <span class="bion-line"></span>
                        <p class="home-content-left-info-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque distinctio recusandae.</p>
                        <div class="home-content-left-info-btn">
                            <div class="btn-wrap1">
                                <button href="" class="primary-btn">View More</button>
                                <p>lorem ipsum dolor sit amit</p>
                            </div>
                            <div class="btn-wrap2">
                                <button href="" class="primary-btn">View More</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="home-content-right-wrap">
                    <div class="home-content-right">
                        <div class="home-content-right-label">
                            <span class="bion-line"></span>
                            <p class="home-content-right-label-detail">Lorem ipsum dolor consectetur adipisicing elit.</p>
                        </div>
                        <div class="home-content-right-desc">
                            <p class="home-content-right-desc-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <p class="home-content-right-desc-info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque distinctio recusandae sunt repudiandae totam animi molestiae ea voluptate, ut adipisci autem! Illum, laudantium at. Voluptatibus recusandae sed ipsam neque itaque!</p>
                            <a href="" class="home-content-right-desc-btn">lorem ipsum dolor</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include __DIR__ . '/includes/parts/footer.php'; ?>

</body>