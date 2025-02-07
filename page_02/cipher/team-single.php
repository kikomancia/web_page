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
                    $mainTitle='Team Single';
                    $Title='Home';
                    $Title2 = 'Team Single';
                ?>
                <?php include './partials/page-header.php'?>
                <!-- end page-title -->

                <!-- start team-single-section -->
                <section class="team-single-section section-padding">
                    <div class="container">
                        <div class="row">
                            <div class="col col-lg-4 col-12">
                                <div class="team-single-sidebar">
                                    <div class="widget team-widget">
                                        <div class="img-holder">
                                            <img src="assets/images/team/team-1.jpg" alt>
                                        </div>
                                        <div class="team-title">
                                            <h2>Jhon Michel</h2>
                                            <span>Founder</span>
                                        </div>
                                    </div>
                                    <div class="widget contact-widget">
                                        <h3>Contact info</h3>
                                        <ul>
                                            <li><span>Phone: </span>+1234 - 0006514654</li>
                                            <li><span>Email: </span>Suppport@emailhub.net.com</li>
                                            <li><span>Address: </span>Dhaka 102, utl 1216, road 45</li>
                                            <li><span>Office hour: </span>10am - 5pm</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-8 col-12">
                                <div class="team-single-content">
                                    <h2>Personal Info</h2>
                                    <div class="table-responsive info-table">
                                        <table class="table">
                                            <colgroup>
                                                <col class="first-col">
                                                <col class="sec-col">
                                            </colgroup>
                                            <tr>
                                                <td>Positon</td>
                                                <td>Team Leader</td>
                                            </tr>
                                            <tr>
                                                <td>Location</td>
                                                <td>Dhaka 102, utl 1216, road 45</td>
                                            </tr>
                                            <tr>
                                                <td>Phone</td>
                                                <td>+1234 - 0006514654</td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td>user@email.com</td>
                                            </tr>
                                            <tr>
                                                <td>Social</td>
                                                <td>
                                                    <ul>
                                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                                        <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Languages</td>
                                                <td>English(fluent), Greek , chinese.</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <h3>Overview</h3>
                                    <p>Prior to joining Netflix in 2008, Anna was senior vice president of consumer
                                        electronics products for Macrovision Solutions Corp. (later renamed to Rovi
                                        Corporation) and previously held positions at digital entertainment software
                                        provider, Mediabolic Inc., Red Hat Network, the provider of Linux and Open
                                        Source technology, and online vendor Wine joining Netflix in 2008, Anna was senior vice president of consumer
                                        electronics products for Macrovision Solutions Corp. (later renamed to Rovi
                                        Corporation) and previously held positions at digital entertainment software
                                        provider, Mediabolic Inc., Red Hat Network, the provider of Linux and Open
                                        Source technology, and online vendor Wine.</p>
                                    <div class="contact">
                                        <h3>Contact with me</h3>
                                        <div class="contact-form">
                                            <form>
                                                <div class="half-col">
                                                    <input type="text" class="form-control" placeholder="Your Name">
                                                </div>
                                                <div class="half-col">
                                                    <input type="email" class="form-control" placeholder="Your Email">
                                                </div>
                                                <div>
                                                    <textarea class="form-control"
                                                        placeholder="Messege..."></textarea>
                                                </div>
                                                <div class="submit-btn-wrapper">
                                                    <button type="button"
                                                        class="ch-btn-style-3 ch-btn-animated">Appointment</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end container -->
                </section>
                <!-- end team-single-section -->

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