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
                        <li class="active">Pages</li>
                    </ul>
                    <h2>Gallery</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Gallery Page Start-->
        <section class="gallery-page">
            <div class="container">
                <div class="row">
                    <!--Gallery Page Single Start-->
                    <?php
$result = $db_handle->runQuery("select * from gallery");

foreach($result as $row) { ?>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="gallery-page__single">
                            <div class="gallery-page__img">
                                <img src="admin/<?php echo $row['image'];?>" alt="">
                                <!-- /.img-popup -->
                                <div class="gallery-page__content">
                                    <p class="gallery-page__sub-title"><?php echo $row['subheading'];?></p>
                                    <h5 class="gallery-page__title"><a href="#!"><?php echo $row['heading'];?></a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <!--Gallery Page Single End-->
                </div>
            </div>
        </section>
        <!--Gallery Page End-->


        <?php include 'footer.php' ?>