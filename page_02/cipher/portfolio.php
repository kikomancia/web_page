<!DOCTYPE html>
<html lang="en">

<?php $title='Cipher - Creative Agency Portfolio PHP Template'?>
<?php include './partials/head.php'?>

<body>

    <!-- start page-wrap -->
    <div class="page-wrap">
        <!-- start preloader -->
        <?php include './partials/preloader.php'?>
        <!-- end preloader -->
        <div class="smooth-scrool-animate" id="smooth-animate"></div>
        <div id="smooth-page-wrapper">
            <div id="smooth-page-content">
                <?php include './partials/header-two.php'?>
                <!-- end of header -->

                <!-- start page-title -->
                <?php 
                    $mainTitle='Portfolio';
                    $Title='Home';
                    $Title2 = 'Portfolio';
                ?>
                <?php include './partials/page-header.php'?>
                <!-- end page-title -->

                <div class="portfolio-page">

                    <!-- start of ch-portfolio-area  -->
                    <section class="ch-portfolio-area ptb-120">
                        <div class="container">
                            <div class="portfolio-wrap">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="portfolio-item wow fadeInUp" data-wow-duration="1200ms">
                                            <div class="portfolio-img">
                                                <img class="imageParallax4" src="assets/images/project/project-1.jpg"
                                                    alt="">
                                            </div>
                                            <div class="portfolio-text">
                                                <span>Graphic Design</span>
                                                <h2><a href="portfolio-single.php">Captivating portfolios design</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="portfolio-item wow fadeInUp" data-wow-duration="1200ms">
                                            <div class="portfolio-img">
                                                <img class="imageParallax" src="assets/images/project/project-2.jpg"
                                                    alt="">
                                            </div>
                                            <div class="portfolio-text">
                                                <span>UI/UX Design</span>
                                                <h2><a href="portfolio-single.php">Explore the art of portfolios</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="portfolio-item wow fadeInUp" data-wow-duration="1200ms">
                                            <div class="portfolio-img">
                                                <img class="imageParallax4" src="assets/images/project/project-3.jpg"
                                                    alt="">
                                            </div>
                                            <div class="portfolio-text">
                                                <span>Website Development</span>
                                                <h2><a href="portfolio-single.php">leave a lasting impression </a></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="portfolio-item wow fadeInUp" data-wow-duration="1200ms">
                                            <div class="portfolio-img">
                                                <img class="imageParallax" src="assets/images/project/project-4.jpg"
                                                    alt="">
                                            </div>
                                            <div class="portfolio-text">
                                                <span>Design</span>
                                                <h2><a href="portfolio-single.php">brand with a stunning portfolio</a>
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- end of ch-portfolio-area  -->

                </div>

                <!-- start of footer-section -->
                <!-- start of footer-section -->
                <?php include './partials/footer-two.php'?>
                <!-- end of site-footer-section -->
            </div>
        </div>

        <!-- mouse-mover -->
        <?php include './partials/mouse.php'?>

    </div>
    <!-- end of page-wrap -->

    <!-- All JavaScript files Here
    ********************************************* -->
    <?php include './partials/script.php'?>
</body>

</html>