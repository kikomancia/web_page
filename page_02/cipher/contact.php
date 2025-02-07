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
                    $mainTitle='Contact';
                    $Title='Home';
                    $Title2 = 'Contact';
                ?>
                <?php include './partials/page-header.php'?>
                <!-- end page-title -->

                <!-- start contact-pg-section -->
                <section class="contact-pg-section section-padding">
                    <div class="container">
                        <div class="row">
                            <div class="col col-lg-5 col-12">
                                <div class="contact-title">
                                    <div class="ch-top-title-s3">
                                        <span>GET IN TOUCH</span>
                                        <h2 class="site-split-text ch-split-in-right">Elevate your brand with a the
                                        </h2>
                                        <p>ished fact that a reader will be distrol acted bioiiy desig ished fact that a
                                            reader will acted ished fact that a reader will be distrol acted </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-7 col-12">
                                <div class="contact-form-area">
                                    <form method="post" class="contact-activation" id="contact-form-mejor"
                                        novalidate="novalidate">
                                        <div class="row">
                                            <div class="col-md-6 col-12 form-field">
                                                <input type="text" class="form-control" name="name" id="name"
                                                    placeholder="Your Name" autocomplete="name">
                                            </div>
                                            <div class="col-md-6 col-12 form-field">
                                                <input type="email" class="form-control" name="email" id="email"
                                                    placeholder="Your Email">
                                            </div>
                                            <div class="col-md-6 col-12 form-field">
                                                <input type="text" class="form-control" name="phone" id="phone"
                                                    placeholder="Phone Number">
                                            </div>
                                            <div class="col-md-6 col-12 form-field">
                                                <select name="subject" class="form-control">
                                                    <option disabled="disabled" selected="">Choose a Option</option>
                                                    <option>web design</option>
                                                    <option>Development</option>
                                                    <option>UX/UI</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12 col-12 form-field">
                                                <textarea class="form-control" name="note" id="note"
                                                    placeholder="Message here.."></textarea>
                                            </div>
                                            <div class="col-md-12 col-12">
                                                <div class="submit-area">
                                                    <button type="submit" class="ch-btn-style-2"><span>Appointment
                                                            Now</span></button>
                                                    <div id="loader">
                                                        <i class="ti-reload"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix error-handling-messages">
                                            <div id="success">Thank you! Massage Sended</div>
                                            <div id="error"> Error occurred while sending email. Please try again
                                                later. </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="office-info ptb-120">
                            <div class="row">
                                <div class="col col-xl-4 col-lg-6 col-md-6 col-12">
                                    <div class="office-info-item">
                                        <div class="office-info-icon">
                                            <div class="icon">
                                                <i class="icon-Group-7044"></i>
                                            </div>
                                        </div>
                                        <div class="office-info-text">
                                            <h2>Address</h2>
                                            <p>Dhaka 102, utl 1216, road 45
                                                house of street</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-xl-4 col-lg-6 col-md-6 col-12">
                                    <div class="office-info-item">
                                        <div class="office-info-icon">
                                            <div class="icon">
                                                <i class="icon-Group-7043"></i>
                                            </div>
                                        </div>
                                        <div class="office-info-text">
                                            <h2>E-mail</h2>
                                            <p>hasan@yourmail.com</p>
                                            <p>Suppport@emailhub.net.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-xl-4 col-lg-6 col-md-6 col-12">
                                    <div class="office-info-item">
                                        <div class="office-info-icon">
                                            <div class="icon">
                                                <i class="icon-Group-7042"></i>
                                            </div>
                                        </div>
                                        <div class="office-info-text">
                                            <h2>Call us</h2>
                                            <p>0000 - 000 - 000 00</p>
                                            <p>+1234 - 000</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end container -->
                </section>
                <!-- end contact-pg-section -->

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