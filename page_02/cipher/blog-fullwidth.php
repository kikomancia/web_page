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
                    $mainTitle='Blog Classic';
                    $Title='Home';
                    $Title2 = 'Blog Classic';
                ?>
                <?php include './partials/page-header.php'?>
                <!-- end page-title -->

                <!-- start blog-page-area -->
                <section class="blog-page-area blog-page-full ptb-120">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col col-lg-10 col-md-12 col-12">
                                <div class="blog-page-left">
                                    <div class="blog-item">
                                        <div class="blog-img">
                                            <img src="assets/images/blog/blog-11.jpg" alt="">
                                            <ul>
                                                <li><i class="ti-tag"></i> Web design</li>
                                                <li><i class="ti-comments"></i> Comments (05)</li>
                                            </ul>
                                        </div>
                                        <div class="blog-content">
                                            <h2><a href="blog-single.php">Elevate your brand with a the stunning portfolio</a></h2>
                                            <p>Aliquam eros justo, posuere loborti viverra lao ullamcorper posuere viverra .Aliquam eros justo, posuere Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper</p>
                                            <a class="ch-btn-style-3 ch-btn-animated" href="blog-single.php">Read More</a>
                                        </div>
                                    </div>
                                    <div class="blog-item">
                                        <div class="blog-img">
                                            <img src="assets/images/blog/blog-12.jpg" alt="">
                                            <ul>
                                                <li><i class="ti-tag"></i> Web design</li>
                                                <li><i class="ti-comments"></i> Comments (05)</li>
                                            </ul>
                                        </div>
                                        <div class="blog-content">
                                            <h2><a href="blog-single.php">Crafting portfolios that inspire success</a></h2>
                                            <p>Aliquam eros justo, posuere loborti viverra lao ullamcorper posuere viverra .Aliquam eros justo, posuere Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper</p>
                                            <a class="ch-btn-style-3 ch-btn-animated" href="blog-single.php">Read More</a>
                                        </div>
                                    </div>
                                    <div class="blog-item">
                                        <div class="blog-img">
                                            <img src="assets/images/blog/blog-13.jpg" alt="">
                                            <ul>
                                                <li><i class="ti-tag"></i> Web design</li>
                                                <li><i class="ti-comments"></i> Comments (05)</li>
                                            </ul>
                                        </div>
                                        <div class="blog-content">
                                            <h2><a href="blog-single.php">Stand out from the crowd with a professional portfolio</a></h2>
                                            <p>Aliquam eros justo, posuere loborti viverra lao ullamcorper posuere viverra .Aliquam eros justo, posuere Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper</p>
                                            <a class="ch-btn-style-3 ch-btn-animated" href="blog-single.php">Read More</a>
                                        </div>
                                    </div>
                                    <div class="pagination-wrapper pagination-wrapper-center">
                                        <ul class="pg-pagination">
                                            <li>
                                                <a href="#" aria-label="Previous">
                                                    <i class="ti-arrow-left"></i>
                                                </a>
                                            </li>
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li>
                                                <a href="#" aria-label="Next">
                                                    <i class="ti-arrow-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end blog-section -->

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