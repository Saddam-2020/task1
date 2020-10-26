<?php 
//Initializing the session 
session_start();

// Include configuration file 
include_once 'hms/include/config.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Yes Doct</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
    <script src="js/custom.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Ensures optimal rendering on mobile devices. -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
</head>
<body class="single-page">
    <header class="site-header">
        <div class="nav-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                        <div class="site-branding d-flex align-items-center">
                            <a class="d-block" href="index.php" rel="home"><h1>Yesdoct</h1></a>
                        </div><!-- .site-branding -->

                        <nav class="site-navigation d-flex justify-content-end align-items-center">
                            <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-items-center">
                                <li ><a href="index.php">Home</a></li>
                                <li><a href="services.php">Diseases</a></li>
                                <li><a href="news.php">Packages</a></li>
                                <li><a href="about.php">About us</a></li>
                                <li class="current-menu-item"><a href="contact.php">Book Appointment</a></li>

                                
                            </ul>
                        </nav><!-- .site-navigation -->

                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- .hamburger-menu -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .nav-bar -->

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Select Package</h1>

                    <div class="breadcrumbs">
                        <ul class="d-flex flex-wrap align-items-center p-0 m-0">
                            <li><a href="#">Home</a></li>
                            <li>Select Package</li>
                        </ul>
                    </div><!-- .breadcrumbs -->

                </div>
            </div>
        </div>

        <img class="header-img" src="images/contact-bg.png" alt="">
    </header><!-- .site-header -->

    <div class="the-news" style="background-color: lightblue">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Our Packages</h2>

                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="the-news-wrap">
                                <figure class="post-thumbnail">
                                    <a href="#"><img src="images/news-1.png" alt=""></a>
                                </figure>

                                <header class="entry-header">
                                    <h3>Consultation</h3>
                                </header>

                                <div class="entry-content">
                                    <p>Get answer in 24 hours, 5$ USD</p>
                                </div>

                                <footer class="entry-footer mt-5">
                                <a class="d-inline-block button gradient-bg" href="package1.php">Proceed</a>
                                </footer>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="the-news-wrap">
                                <figure class="post-thumbnail">
                                    <a href="#"><img src="images/news-2.png" alt=""></a>
                                </figure>

                                <header class="entry-header">
                                    <h3>Quick Response</h3>
                                </header>

                                <div class="entry-content">
                                    <p>Get answer in 6-8 hours, 10$ USD</p>
                                </div>

                                <footer class="entry-footer mt-5">
                                <a class="d-inline-block button gradient-bg" href="package2.php">Proceed</a>
                            </footer>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="the-news-wrap">
                                <figure class="post-thumbnail">
                                    <a href="#"><img src="images/news-3.png" alt=""></a>
                                </figure>

                                <header class="entry-header">
                                    <h3>Consult Urgent</h3>
                                </header>

                                <div class="entry-content">
                                    <p>Get answer in 30 min-4 hours, 15$ USD</p>
                                </div>

                                <footer class="entry-footer mt-5">
                                <a class="d-inline-block button gradient-bg" href="package3.php">Proceed</a>

                                </footer>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="site-footer">
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="foot-about">
                            <h2><a href="#">YesDoct</a></h2>

                            <p>Let us help you stay healthy !<br>Our doctor is specialized in providing all basis health consultations and second opinion, he will take care of your all acute and chronic cases, includung diabetes, hypertension, asthma, Labs, pregnancy, joint pain, renal health, liver health, sexual issues as well as mental satisfaction.</p>

                            <p class="copyright">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </p>
                        </div><!-- .foot-about -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-4 mt-5 mt-md-0">
                        <div class="foot-contact">
                            <h2>Contact</h2>
                            <a href="contact.php" target="_blank">Book Consultation Now</a>
                        </div>
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-4 mt-5 mt-md-0">
                        <div class="foot-links">
                            <h2>Usefull Links</h2>

                            <ul class="p-0 m-0">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about.php">About us</a></li>
                                <li><a href="Services.php">Diseases</a></li>
                                <li><a href="contact.php">Book Appointment</a></li>
                                <li><a href="news.php">FAQ</a></li>
                                <li><a href="services.php">Testimonials</a></li>
                            </ul>
                        </div><!-- .foot-links -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .footer-widgets -->
    </footer><!-- .site-footer -->

    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='js/swiper.min.js'></script>
    <script type='text/javascript' src='js/jquery.countdown.min.js'></script>
    <script type='text/javascript' src='js/circle-progress.min.js'></script>
    <script type='text/javascript' src='js/jquery.countTo.min.js'></script>
    <script type='text/javascript' src='js/jquery.barfiller.js'></script>
    <script type='text/javascript' src='js/custom.js'></script>
</body>
</html>