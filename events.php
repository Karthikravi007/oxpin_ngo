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
                        <li class="active">Events</li>
                    </ul>
                    <h2>Events</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Events Page Start-->
        <section class="events-page">
            <div class="container">
                <div class="row">
                <?php
$result = $db_handle->runQuery("select * from event");

foreach($result as $row) { ?>
                    <div class="col-xl-4 col-lg-6 col-md-6">
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
        </section>
        <!--Events Page End-->

        <?php include 'footer.php' ?>