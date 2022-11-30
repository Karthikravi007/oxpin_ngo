<?php include 'header.php' ?>
        <!--Main Slider Start-->
        <section class="main-slider clearfix">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                "delay": 5000
                }}'>
                <div class="swiper-wrapper">
                <?php
$result = $db_handle->runQuery("select * from slider");

foreach($result as $row) { ?>
                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(admin/<?php echo $row['image'];?>);"></div>
                        <!-- /.image-layer -->

                        <div class="main-slider-shape-1"
                            style="background-image: url(assets/images/shapes/main-slider-shape-1.jpg);"></div>
                        <div class="main-slider-shape-2 float-bob-x">
                            <img src="assets/images/shapes/main-slider-shape-2.png" alt="">
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6 col-lg-8">
                                    <div class="main-slider__content">
                                        <p class="main-slider__sub-title"><?php echo $row['heading'];?></p>
                                        <h2 class="main-slider__title"><?php echo $row['subheading'];?></h2>
                                        <!-- <div class="main-slider__btn-box">
                                            <a href="about.php" class="thm-btn main-slider__btn"> Discover more</a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<?php } ?>
                </div>

                <!-- If we need navigation buttons -->
                <div class="main-slider__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                        <i class="icon-left-arrow"></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                        <i class="icon-right-arrow"></i>
                    </div>
                </div>

            </div>
        </section>
        <!--Main Slider End-->

        <!--About One Start-->
        <section class="about-one">
            <div class="about-one__shape-box-1">
                <div class="about-one__shape-1"
                    style="background-image: url(assets/images/shapes/about-one-shape-1.png);"></div>
            </div>
            <div class="container">
            <?php
$result = $db_handle->runQuery("select * from mini_about");

foreach($result as $row) { ?>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-one__left">
                            <div class="about-one__img-box wow slideInLeft" data-wow-delay="100ms"
                                data-wow-duration="2500ms">
                                <div class="about-one__img">
                                    <img src="admin/<?php echo $row['image'];?>" alt="">
                                </div>
                                <div class="about-one__img-border"></div>
                                
                                <div class="about-one__shape-2 zoom-fade">
                                    <img src="assets/images/shapes/about-one-shape-2.png" alt="">
                                </div>
                                <div class="about-one__shape-3 float-bob-y">
                                    <img src="assets/images/shapes/about-one-shape-3.png" alt="">
                                </div>
                                <div class="about-one__shape-4 zoominout">
                                    <img src="assets/images/shapes/about-one-shape-4.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-one__right">
                            <div class="section-title text-left">
                                <span class="section-title__tagline"><?php echo $row['exprience'];?></span>
                                <h2 class="section-title__title"><?php echo $row['heading'];?></h2>
                            </div>
                            <p class="about-one__text"><?php echo $row['description'];?></p>
                            <div class="about-one__fund">
                               </div>
                            <ul class="list-unstyled about-one__points">
                                <li>
                                    <div class="icon">
                                        <span class="icon-volunteer"></span>
                                    </div>
                                    <div class="text">
                                        <h5><a href="#!"><?php echo $row['subheading1'];?></a></h5>
                                        <p><?php echo $row['description1'];?></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-solidarity"></span>
                                    </div>
                                    <div class="text">
                                        <h5><a href="donate.php"><?php echo $row['subheading2'];?></a></h5>
                                        <p><?php echo $row['description2'];?></p>
                                    </div>
                                </li>
                            </ul>
                            <a href="about.php" class="thm-btn about-one__btn">Discover More</a>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
        </section>
        <!--About One End-->

        <!--Causes One Start-->
        <section class="causes-one">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Help & donate us now</span>
                    <h2 class="section-title__title">Find the popular cause <br> and donate them</h2>
                </div>
                <div class="row">
                <?php
$result = $db_handle->runQuery("select * from donations");

foreach($result as $row) { ?>
                    <!--Causes One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="causes-one__single">
                            <div class="causes-one__img">
                                <img src="admin/<?php echo $row['image'];?>" alt="">
                            </div>
                            <div class="causes-one__content">
                                <h3 class="causes-one__title"><a href="donate.php"><?php echo $row['heading'] ?></a>
                                </h3>
                                <p class="causes-one__text"><?php echo $row['description'] ?></p>
                                <div class="causes-one__progress">
                                    <div class="causes-one__progress-shape"
                                        style="background-image: url(assets/images/shapes/causes-one-progress-shape-1.png);">
                                    </div>
                                    <?php $calculation = round(($row['raised'] / $row['goal'])*100); ?>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="<?php echo $calculation ?>">
                                            <div class="count-text">
                                                <?php echo  $calculation;?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="causes-one__goals">
                                        <p><span><?php echo $row['goal'] ?></span> Raised</p>
                                        <p><span><?php echo $row['raised'] ?></span> Goal</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Causes One Single End-->
                    <?php } ?>
                </div>
            </div>
        </section>
        <!--Causes One End-->

        <!--Become Volunteer One Start-->
        <?php
$result = $db_handle->runQuery("select * from content");

foreach($result as $row) { ?>
        <section class="become-volunteer-one">
            <div class="become-volunteer-one__bg-box">
                <div class="become-volunteer-one__bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                    style="background-image: url(admin/<?php echo $row['image'];?>);"></div>
            </div>
            <div class="become-volunteer-one__shape-1"
                style="background-image: url(assets/images/shapes/become-volunteer-shape-1.png);"></div>
            <div class="container">
                <div class="become-volunteer-one__inner">
                    <p class="become-volunteer-one__sub-title"><?php echo $row['heading'];?></p>
                    <h3 class="become-volunteer-one__title"><?php echo $row['subheading'];?>
                    </h3>
                    <div class="become-volunteer-one__btn-box">
                        <a href="#!" class="thm-btn become-volunteer-one__btn">Discover More</a>
                    </div>
                </div>
            </div>
        </section>
        <?php } ?>
        <!--Become Volunteer One End-->

        <!--Events One Start-->
        <section class="events-one">
            <div class="events-one-shape-1" style="background-image: url(assets/images/shapes/events-one-shape-1.png)">
            </div>
            <div class="container">
                <div class="row">
                    <!-- <div class="col-xl-4 col-lg-4">
                        <div class="events-one__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Upcoming events</span>
                                <h2 class="section-title__title">Join our latest upcoming events</h2>
                            </div>
                            <p class="events-one__text-1">There are many variations of passages of lorem ipsum available
                                but the majority have suffered.</p>
                            <a href="events.php" class="thm-btn events-one__btn">Discover More</a>
                        </div>
                    </div> -->
                    <div class="col-xl-12 col-lg-12">
                        <div class="events-one__right">
                            <div class="events-one__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                                "loop": true,
                                "autoplay": true,
                                "margin": 20,
                                "nav": true,
                                "dots": false,
                                "smartSpeed": 500,
                                "autoplayTimeout": 10000,
                                "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
                                "responsive": {
                                    "0": {
                                        "items": 1
                                    },
                                    "768": {
                                        "items": 3
                                    },
                                    "992": {
                                        "items": 3
                                    },
                                    "1200": {
                                        "items": 4
                                    }
                                }
                            }'>
                            <?php
$result = $db_handle->runQuery("select * from event");

foreach($result as $row) { ?>
                                <div class="item">
                                    <!--Events One Single Start-->
                                    <div class="events-one__single">
                                        <div class="events-one__img">
                                            <img src="admin/<?php echo $row['image'];?>" alt="">
                                            <div class="events-one__date">
                                                <p><?php echo $row['date'];?></p>
                                            </div>
                                            <div class="events-one__content">
                                                <h3 class="events-one__title"><a href="events.php"><?php echo $row['heading'];?></a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Events One Single End-->
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Events One End-->
        <!--Testimonial One Start-->
        <section class="testimonial-one">
            <div class="testimonial-one-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                style="background-image: url(assets/images/backgrounds/testimonial-one-bg.jpg);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-2">
                       
                    </div>
                    <div class="col-xl-8 col-lg-8">
                        <div class="testimonial-one__right">
                            <div class="testimonial-one__img-1 zoom-fade">
                                <img src="assets/images/testimonial/testimonial-img-1.jpg" alt="">
                            </div>
                            <div class="testimonial-one__img-1 testimonial-one__img-2 zoom-fade">
                                <img src="assets/images/testimonial/testimonial-img-2.jpg" alt="">
                            </div>
                            <div class="testimonial-one__img-1 testimonial-one__img-3 zoom-fade">
                                <img src="assets/images/testimonial/testimonial-img-3.jpg" alt="">
                            </div>
                            <div class="testimonial-one__img-1 testimonial-one__img-4 zoom-fade">
                                <img src="assets/images/testimonial/testimonial-img-4.jpg" alt="">
                            </div>
                            <div class="testimonial-one__carousel owl-carousel owl-theme thm-owl__carousel"
                                data-owl-options='{
                                "loop": true,
                                "autoplay": true,
                                "margin": 50,
                                "nav": true,
                                "dots": false,
                                "smartSpeed": 500,
                                "autoplayTimeout": 10000,
                                "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
                                "responsive": {
                                    "0": {
                                        "items": 1
                                    },
                                    "768": {
                                        "items": 1
                                    },
                                    "992": {
                                        "items": 1
                                    },
                                    "1200": {
                                        "items": 1
                                    }
                                }
                            }'>
                            <?php
$result = $db_handle->runQuery("select * from testimonial");

foreach($result as $row) { ?>
                                <div class="item">
                                    <!--Testimonial One Single Start-->
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__shape-1"
                                            style="background-image: url(assets/images/shapes/testimonial-one-shape-1.png);">
                                        </div>
                                        <div class="testimonial-one__client-img">
                                            <img src="admin/<?php echo $row['image'];?>" alt="">
                                        </div>
                                        <div class="testimonial-one__client-info">
                                            <h3 class="testimonial-one__client-name"><?php echo $row['heading'] ?></h3>
                                            <p class="testimonial-one__client-sub-title"><?php echo $row['subheading'] ?></p>
                                        </div>
                                        <div class="testimonial-one__quote">
                                            <span class="icon-double-quotes"></span>
                                        </div>
                                        <p class="testimonial-one__text-2"><?php echo $row['description'] ?></p>
                                    </div>
                                    <!--Testimonial One Single End-->
                                </div>
                               <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2">
                       
                       </div>
                </div>
            </div>
        </section>
        <!--Testimonial One End-->
        <!--Counter One Start-->
        <section class="counter-one" style="padding-top: 93px;padding-bottom: 50px;">
            <div class="container">
                <div class="counter-one__inner">
                    <div class="counter-one-bg" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                        style="background-image: url(assets/images/backgrounds/counter-one-bg.jpg);"></div>
                    <ul class="list-unstyled counter-one__list">
                    <?php
$result = $db_handle->runQuery("select * from count");

foreach($result as $row) { ?>
                        <li class="counter-one__single">
                            <div class="counter-one__count-box">
                                <h3 class="odometer" data-count="<?php echo $row['count'] ?>">00</h3>
                            </div>
                            <p class="counter-one__text"><?php echo $row['heading'] ?></p>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </section>
        <!--Counter One End-->

        <?php include 'footer.php' ?>