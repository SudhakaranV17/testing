<?php
$pageTitle = "Home Page"; // Define the page title
include __DIR__ . '/includes/parts/head.php'; // Include the common head section
?>

<body>

    <section class="nest-section">
        <div class="container">
            <div class="swiper" id="mainSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"></div>
                    <div class="swiper-slide">
                        <div class="inner">
                            <div class="swiper" id="innerSwiper1">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"></div>
                                    <div class="swiper-slide"></div>
                                    <div class="swiper-slide"></div>
                                </div>
                                <div class="swiper-pagination"></div>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="inner">
                            <div class="swiper" id="innerSwiper2">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"></div>
                                    <div class="swiper-slide"></div>
                                    <div class="swiper-slide"></div>
                                </div>
                                <div class="swiper-pagination"></div>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="inner">
                            <div class="swiper" id="innerSwiper3">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"></div>
                                    <div class="swiper-slide"></div>
                                    <div class="swiper-slide"></div>
                                </div>
                                <div class="swiper-pagination"></div>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide"></div>
                </div>
                <div class="swiper-pagination-fraction"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>

    <?php include __DIR__ . '/includes/parts/footer.php'; ?>

</body>