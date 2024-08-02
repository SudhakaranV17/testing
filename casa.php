<?php
$pageTitle = "Home Page"; // Define the page title
include __DIR__ . '/includes/parts/head.php'; // Include the common head section
?>

<body>
    <section class="experience-section">
        <div class="experience">
            <div class="experience-header">
                <p class="section-minititle">Memorable</p>
                <h2 class="section-title">Experience</h2>
            </div>
            <div class="experience-wrap">
                <!-- Accordion Items -->
                <div class="experience-items accordion">
                    <div id="experience">
                        <!-- Accordion Item 1 -->
                        <div class="experience-items-item" type="button" data-bs-toggle="collapse" data-bs-target="#exp1" aria-expanded="false" aria-controls="exp1">
                            <div class="experience-items-item-btn">
                                <p>Lorem 1</p>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right">
                                        <path d="M7 7h10v10" />
                                        <path d="M7 17 17 7" />
                                    </svg>
                                </span>
                            </div>
                            <div class="experience-items-item-content collapse show" id="exp1" data-bs-parent="#experience">
                                <p class="experience-items-item-content-title">Lorem Ipsum 1</p>
                                <p class="experience-items-item-content-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum facere corporis nulla repudiandae vero expedita obcaecati ea sequi.</p>
                            </div>
                        </div>
                        <!-- Accordion Item 2 -->
                        <div class="experience-items-item" type="button" data-bs-toggle="collapse" data-bs-target="#exp2" aria-expanded="false" aria-controls="exp2">
                            <div class="experience-items-item-btn">
                                <p>Lorem 2</p>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right">
                                        <path d="M7 7h10v10" />
                                        <path d="M7 17 17 7" />
                                    </svg>
                                </span>
                            </div>
                            <div class="experience-items-item-content collapse" id="exp2" data-bs-parent="#experience">
                                <p class="experience-items-item-content-title">Lorem Ipsum 2</p>
                                <p class="experience-items-item-content-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum facere corporis nulla repudiandae vero expedita obcaecati ea sequi.</p>
                            </div>
                        </div>
                        <!-- Accordion Item 3 -->
                        <div class="experience-items-item" type="button" data-bs-toggle="collapse" data-bs-target="#exp3" aria-expanded="false" aria-controls="exp3">
                            <div class="experience-items-item-btn">
                                <p>Lorem 3</p>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right">
                                        <path d="M7 7h10v10" />
                                        <path d="M7 17 17 7" />
                                    </svg>
                                </span>
                            </div>
                            <div class="experience-items-item-content collapse" id="exp3" data-bs-parent="#experience">
                                <p class="experience-items-item-content-title">Lorem Ipsum 3</p>
                                <p class="experience-items-item-content-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum facere corporis nulla repudiandae vero expedita obcaecati ea sequi.</p>
                            </div>
                        </div>
                        <!-- Accordion Item 4 -->
                        <div class="experience-items-item" type="button" data-bs-toggle="collapse" data-bs-target="#exp4" aria-expanded="false" aria-controls="exp4">
                            <div class="experience-items-item-btn">
                                <p>Lorem 4</p>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right">
                                        <path d="M7 7h10v10" />
                                        <path d="M7 17 17 7" />
                                    </svg>
                                </span>
                            </div>
                            <div class="experience-items-item-content collapse" id="exp4" data-bs-parent="#experience">
                                <p class="experience-items-item-content-title">Lorem Ipsum 4</p>
                                <p class="experience-items-item-content-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum facere corporis nulla repudiandae vero expedita obcaecati ea sequi.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Swiper Slider Section -->
                <div class="experience-slider swiper-container">
                    <div class="swiper-wrapper experience-slider-items">
                        <!-- Slider Item 1 -->
                        <div class="swiper-slide experience-slider-items-item exp1">
                            <img src="./assests/images/casa/exp1.jpg" alt="Experience 1">
                        </div>
                        <!-- Slider Item 2 -->
                        <div class="swiper-slide experience-slider-items-item exp2">
                            <img src="./assests/images/casa/exp2.jpg" alt="Experience 2">
                        </div>
                        <!-- Slider Item 3 -->
                        <div class="swiper-slide experience-slider-items-item exp3">
                            <img src="./assests/images/casa/exp3.jpg" alt="Experience 3">
                        </div>
                        <!-- Slider Item 4 -->
                        <div class="swiper-slide experience-slider-items-item exp4">
                            <img src="./assests/images/casa/exp4.jpg" alt="Experience 4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="section-padding">
    </div>
    <section class="tmp-section">
        <div class="tmp">
            <div class="tmp-header">
                <p class="section-minititle">Memorable</p>
                <h2 class="section-title">Experience</h2>
            </div>
            <div class="tmp-main">
                <div class="tmp-main-items">
                    <div class="tmp-main-items-item big">
                        <div class="tmp-main-items-item-img">
                            <img src="./assests/images/casa/tmp1.jpg" alt="">
                        </div>
                        <p class="">lorem ipsum dolor</p>
                        <p>lorem ipsum dolor sit amet</p>
                    </div>
                    <div class="tmp-main-items-item">
                        <div class="tmp-main-items-item-img">
                            <img src="./assests/images/casa/tmp2.jpg" alt="">
                        </div>
                        <p class="tmp-main-items-item-title">lorem ipsum dolor</p>
                        <p>lorem ipsum dolor sit amet</p>
                    </div>
                    <div class="tmp-main-items-item">
                        <div class="tmp-main-items-item-img">
                            <img src="./assests/images/casa/tmp3.jpg" alt="">
                        </div>
                        <p class="">lorem ipsum dolor</p>
                        <p>lorem ipsum dolor sit amet</p>
                    </div>
                    <div class="tmp-main-items-item big">
                        <div class="tmp-main-items-item-img">
                            <img src="./assests/images/casa/tmp4.jpg" alt="">
                        </div>
                        <p class="">lorem ipsum dolor</p>
                        <p>lorem ipsum dolor sit amet</p>
                    </div>
                    <div class="tmp-main-items-item">
                        <div class="tmp-main-items-item-img">
                            <img src="./assests/images/casa/tmp5.jpg" alt="">
                        </div>
                        <p class="">lorem ipsum dolor</p>
                        <p>lorem ipsum dolor sit amet</p>
                    </div>
                    <div class="tmp-main-items-item">
                        <div class="tmp-main-items-item-img">
                            <img src="./assests/images/casa/tmp6.jpg" alt="">
                        </div>
                        <p class="">lorem ipsum dolor</p>
                        <p>lorem ipsum dolor sit amet</p>
                    </div>
                </div>
                <div class="tmp-main-content">
                    <p class="mb-4">lorem</p>
                    <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque sit repudiandae magni error eaque temporibus rerum, adipisci officiis suscipit numquam fugiat exercitationem vel illum sunt tempore labore corrupti modi? Tenetur.</p>
                </div>
            </div>
        </div>
    </section>
    <div class="section-gap"></div>
    <div class="section-gap"></div>
    <div class="section-gap"></div>
    <div class="section-gap"></div>
    <div class="section-gap"></div>
    <div class="section-gap"></div>
    <div class="section-gap"></div>
    <div class="section-gap"></div>
    <div class="section-gap"></div>
    <div class="section-gap"></div>
    <?php include __DIR__ . '/includes/parts/footer.php'; ?>

</body>