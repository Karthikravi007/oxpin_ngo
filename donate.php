<?php include 'header.php' ?>
        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.php">Home</a></li>
                        <li><span>/</span></li>
                        <li class="active">Donate now</li>
                    </ul>
                    <h2>Donate now</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Donate Now Start-->
        <section class="donate-now">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="donate-now__left">
                            
                            <div class="donate-now__personal-info-box">
                                <h3 class="donate-now__title">Payment info</h3>
                                <form class="donate-now__personal-info-form" action="pay.php" method="post">
                                <div class="donate-now__enter-donation" style="margin-bottom:20px">
                                <div class="donate-now__enter-donation-input">
                                    <input type="text" name="donation" placeholder="Enter Your Amount (₹)" value="">
                                </div>
                            </div>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="donate-now__personal-info-input">
                                                <input type="text" placeholder="First name" name="name" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="donate-now__personal-info-input">
                                                <input type="text" placeholder="Last name" name="lastname" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="donate-now__personal-info-input">
                                                <input type="email" placeholder="Email address" name="email" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="donate-now__personal-info-input">
                                                <input type="text" placeholder="Phone" name="phone" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div
                                                class="donate-now__personal-info-input donate-now__personal-info-message-box">
                                                <textarea name="message" placeholder="Write message"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="margin-top:20px;" class="donate-now__payment-info-btn-box">
                                        <button type="submit" name="submit" class="thm-btn donate-now__payment-info-btn">Donate
                                            now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="donate-now__right">
                            <div class="causes-one__single">
                                <div class="causes-one__img">
                                    <img src="assets/images/resources/causes-1-1.jpg" alt="">
                                    <div class="causes-one__cat">
                                        <p>Education</p>
                                    </div>
                                </div>
                                <div class="causes-one__content">
                                    <h3 class="causes-one__title"><a href="donate.php">Let’s education for
                                            children get good
                                            life</a>
                                    </h3>
                                    <p class="causes-one__text">There are many of lorem, but majori have
                                        suffered alteration in some form.</p>
                                    <div class="causes-one__progress">
                                        <div class="causes-one__progress-shape"
                                            style="background-image: url(assets/images/shapes/causes-one-progress-shape-1.png);">
                                        </div>
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="36%">
                                                <div class="count-text">36%</div>
                                            </div>
                                        </div>
                                        <div class="causes-one__goals">
                                            <p><span>$25,270</span> Raised</p>
                                            <p><span>$30,000</span> Goal</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="donation-details__organizer">
                                <div class="sidebar-shape-1"
                                    style="background-image: url(assets/images/shapes/sidebar-shape-1.png);"></div>
                                <div class="donation-details__organizer-img">
                                    <img src="assets/images/resources/donation-details-organizer-img.jpg" alt="">
                                </div>
                                <div class="donation-details__organizer-content">
                                    <p class="donation-details__organizer-date">Created 20 april, 2022</p>
                                    <p class="donation-details__organizer-title">Organizer:</p>
                                    <p class="donation-details__organizer-name">Jessica smith</p>
                                    <ul class="list-unstyled donation-details__organizer-list">
                                        <li>
                                            <div class="icon">
                                                <span class="fas fa-tag"></span>
                                            </div>
                                            <div class="text">
                                                <p>Education</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="fas fa-map-marker-alt"></span>
                                            </div>
                                            <div class="text">
                                                <p>Westwood, Canada</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Donate Now End-->

        <?php include 'footer.php' ?>