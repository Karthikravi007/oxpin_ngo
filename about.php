<?php include 'header.php' ?>
<style>
.about-four {
    position: relative;
    display: block;
    padding: 120px 0 90px !important;
}
</style>
        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.php">Home</a></li>
                        <li><span>/</span></li>
                        <li class="active">Pages</li>
                    </ul>
                    <h2>About us</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--About Four Start-->
        <?php
$result = $db_handle->runQuery("select * from about");

foreach($result as $row) { ?>
        <section class="about-four causes-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-four__left">
                            <div class="about-four__img-box">
                                <div class="about-four__img">
                                    <img src="admin/<?php echo $row['t_image'];?>" alt="">
                                </div>
                                <div class="about-four__img-two">
                                    <img src="admin/<?php echo $row['b_image'];?>" alt="">
                                </div>
                                <div class="about-four__border"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-four__right">
                            <div class="section-title text-left">
                                <span class="section-title__tagline"><?php echo $row['heading'];?></span>
                                <h2 class="section-title__title"><?php echo $row['subheading'];?></h2>
                            </div>
                            <p class="about-four__text"><?php echo nl2br($row['description']);?> </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php } ?>
        <!--About Four End-->

        <!--Testimonial Two Start-->
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
        <!--Testimonial Two End-->

        <!--Become Volunteer One Start-->
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

        <!--Become Volunteer One End-->
       

        <?php include 'footer.php' ?>