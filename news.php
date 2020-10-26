<?php session_start(); session_unset();
//header('location: contact.php') ?>
    <!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <title>Hello World</title>-->

    <!-- Required meta tags -->
<!--    <meta charset="utf-8">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->

    <!-- Bootstrap CSS -->
<!--    <link rel="stylesheet" href="css/bootstrap.min.css">-->

    <!-- Swiper CSS -->
<!--    <link rel="stylesheet" href="css/swiper.min.css">-->

<!--    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->

    <!-- Styles -->
<!--    <link rel="stylesheet" href="style.css">-->
<!--</head>-->
<!--<body class="single-page blog-page">-->
<!--    <header class="site-header">-->
<!--        <div class="nav-bar">-->
<!--            <div class="container">-->
<!--                <div class="row">-->
<!--                    <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">-->
<!--                        <div class="site-branding d-flex align-items-center">-->
<!--                            <a class="d-block" href="index.php" rel="home"><h1>Yes Doct</h1></a>-->
<!--                        </div><!-- .site-branding -->

<!--                        <nav class="site-navigation d-flex justify-content-end align-items-center">-->
<!--                            <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-items-center">-->
<!--                                <li class="current-menu-item"><a href="index.php">Home</a></li>-->
<!--                                <li><a href="about.php">About us</a></li>-->
<!--                                <li><a href="services.php">Services</a></li>-->
<!--                                <li><a href="news.php">News</a></li>-->
<!--                                <li><a href="contact.php">Book Appointment</a></li>-->

<!--                                <li class="call-btn button gradient-bg mt-3 mt-md-0">-->
<!--                                    <a class="d-flex justify-content-center align-items-center" href="#"><img src="images/emergency-call.png"> +34 586 778 8892</a>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </nav><!-- .site-navigation -->

<!--                        <div class="hamburger-menu d-lg-none">-->
<!--                            <span></span>-->
<!--                            <span></span>-->
<!--                            <span></span>-->
<!--                            <span></span>-->
<!--                        </div><!-- .hamburger-menu -->
<!--                    </div><!-- .col -->
<!--                </div><!-- .row -->
<!--            </div><!-- .container -->
<!--        </div><!-- .nav-bar -->

<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-12">-->
<!--                    <h1>News</h1>-->

<!--                    <div class="breadcrumbs">-->
<!--                        <ul class="d-flex flex-wrap align-items-center p-0 m-0">-->
<!--                            <li><a href="#">Home</a></li>-->
<!--                            <li>News</li>-->
<!--                        </ul>-->
<!--                    </div><!-- .breadcrumbs -->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->

<!--        <img class="header-img" src="images/news-bg.png" alt="">-->
<!--    </header><!-- .site-header -->

<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-12 col-lg-8">-->
<!--                <div class="the-news">-->
<!--                    <div class="row">-->
<!--                        <div class="col-12 col-md-6">-->
<!--                            <div class="the-news-wrap">-->
<!--                                <figure class="post-thumbnail">-->
<!--                                    <a href="#"><img src="images/news-1.png" alt=""></a>-->
<!--                                </figure>-->

<!--                                <header class="entry-header">-->
<!--                                    <h3>The latest in Medicine</h3>-->

<!--                                    <div class="post-metas d-flex flex-wrap align-items-center">-->
<!--                                        <div class="posted-date"><label>Date: </label><a href="#">April 12, 2018</a></div>-->

<!--                                        <div class="posted-by"><label>By: </label><a href="#">Dr. Jake Williams</a></div>-->

<!--                                        <div class="post-comments"><a href="#">2 Comments</a></div>-->
<!--                                    </div>-->
<!--                                </header>-->

<!--                                <div class="entry-content">-->
<!--                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. </p>-->
<!--                                </div>-->

<!--                                <footer class="entry-footer mt-5">-->
<!--                                    <a class="button gradient-bg" href="#">Read More</a>-->
<!--                                </footer>-->
<!--                            </div>-->
<!--                        </div>-->

<!--                        <div class="col-12 col-md-6">-->
<!--                            <div class="the-news-wrap">-->
<!--                                <figure class="post-thumbnail">-->
<!--                                    <a href="#"><img src="images/news-2.png" alt=""></a>-->
<!--                                </figure>-->

<!--                                <header class="entry-header">-->
<!--                                    <h3>All you need to know about pills</h3>-->

<!--                                    <div class="post-metas d-flex flex-wrap align-items-center">-->
<!--                                        <div class="posted-date"><label>Date: </label><a href="#">April 12, 2018</a></div>-->

<!--                                        <div class="posted-by"><label>By: </label><a href="#">Dr. Jake Williams</a></div>-->

<!--                                        <div class="post-comments"><a href="#">2 Comments</a></div>-->
<!--                                    </div>-->
<!--                                </header>-->

<!--                                <div class="entry-content">-->
<!--                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. </p>-->
<!--                                </div>-->

<!--                                <footer class="entry-footer mt-5">-->
<!--                                    <a class="button gradient-bg" href="#">Read More</a>-->
<!--                                </footer>-->
<!--                            </div>-->
<!--                        </div>-->

<!--                        <div class="col-12 col-md-6">-->
<!--                            <div class="the-news-wrap">-->
<!--                                <figure class="post-thumbnail">-->
<!--                                    <a href="#"><img src="images/news-6.png" alt=""></a>-->
<!--                                </figure>-->

<!--                                <header class="entry-header">-->
<!--                                    <h3>Marketing and Medicine</h3>-->

<!--                                    <div class="post-metas d-flex flex-wrap align-items-center">-->
<!--                                        <div class="posted-date"><label>Date: </label><a href="#">April 12, 2018</a></div>-->

<!--                                        <div class="posted-by"><label>By: </label><a href="#">Dr. Jake Williams</a></div>-->

<!--                                        <div class="post-comments"><a href="#">2 Comments</a></div>-->
<!--                                    </div>-->
<!--                                </header>-->

<!--                                <div class="entry-content">-->
<!--                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. </p>-->
<!--                                </div>-->

<!--                                <footer class="entry-footer mt-5">-->
<!--                                    <a class="button gradient-bg" href="#">Read More</a>-->
<!--                                </footer>-->
<!--                            </div>-->
<!--                        </div>-->

<!--                        <div class="col-12 col-md-6">-->
<!--                            <div class="the-news-wrap">-->
<!--                                <figure class="post-thumbnail">-->
<!--                                    <a href="#"><img src="images/news-4.png" alt=""></a>-->
<!--                                </figure>-->

<!--                                <header class="entry-header">-->
<!--                                    <h3>Marketing and Medicine</h3>-->

<!--                                    <div class="post-metas d-flex flex-wrap align-items-center">-->
<!--                                        <div class="posted-date"><label>Date: </label><a href="#">April 12, 2018</a></div>-->

<!--                                        <div class="posted-by"><label>By: </label><a href="#">Dr. Jake Williams</a></div>-->

<!--                                        <div class="post-comments"><a href="#">2 Comments</a></div>-->
<!--                                    </div>-->
<!--                                </header>-->

<!--                                <div class="entry-content">-->
<!--                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. </p>-->
<!--                                </div>-->

<!--                                <footer class="entry-footer mt-5">-->
<!--                                    <a class="button gradient-bg" href="#">Read More</a>-->
<!--                                </footer>-->
<!--                            </div>-->
<!--                        </div>-->

<!--                        <div class="col-12 col-md-6">-->
<!--                            <div class="the-news-wrap">-->
<!--                                <figure class="post-thumbnail">-->
<!--                                    <a href="#"><img src="images/news-5.png" alt=""></a>-->
<!--                                </figure>-->

<!--                                <header class="entry-header">-->
<!--                                    <h3>Marketing and Medicine</h3>-->

<!--                                    <div class="post-metas d-flex flex-wrap align-items-center">-->
<!--                                        <div class="posted-date"><label>Date: </label><a href="#">April 12, 2018</a></div>-->

<!--                                        <div class="posted-by"><label>By: </label><a href="#">Dr. Jake Williams</a></div>-->

<!--                                        <div class="post-comments"><a href="#">2 Comments</a></div>-->
<!--                                    </div>-->
<!--                                </header>-->

<!--                                <div class="entry-content">-->
<!--                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. </p>-->
<!--                                </div>-->

<!--                                <footer class="entry-footer mt-5">-->
<!--                                    <a class="button gradient-bg" href="#">Read More</a>-->
<!--                                </footer>-->
<!--                            </div>-->
<!--                        </div>-->

<!--                        <div class="col-12 col-md-6">-->
<!--                            <div class="the-news-wrap">-->
<!--                                <figure class="post-thumbnail">-->
<!--                                    <a href="#"><img src="images/news-3.png" alt=""></a>-->
<!--                                </figure>-->

<!--                                <header class="entry-header">-->
<!--                                    <h3>Marketing and Medicine</h3>-->

<!--                                    <div class="post-metas d-flex flex-wrap align-items-center">-->
<!--                                        <div class="posted-date"><label>Date: </label><a href="#">April 12, 2018</a></div>-->

<!--                                        <div class="posted-by"><label>By: </label><a href="#">Dr. Jake Williams</a></div>-->

<!--                                        <div class="post-comments"><a href="#">2 Comments</a></div>-->
<!--                                    </div>-->
<!--                                </header>-->

<!--                                <div class="entry-content">-->
<!--                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. </p>-->
<!--                                </div>-->

<!--                                <footer class="entry-footer mt-5">-->
<!--                                    <a class="button gradient-bg" href="#">Read More</a>-->
<!--                                </footer>-->
<!--                            </div>-->
<!--                        </div>-->

<!--                        <div class="col-12">-->
<!--                            <ul class="pagination d-flex flex-wrap align-items-center p-0">-->
<!--                                <li class="active"><a href="#">01</a></li>-->
<!--                                <li><a href="#">02</a></li>-->
<!--                                <li><a href="#">03</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

<!--            <div class="col-12 col-lg-4">-->
<!--                <div class="sidebar">-->
<!--                    <div class="search-widget">-->
<!--                        <form class="flex flex-wrap align-items-center">-->
<!--                            <input type="search" placeholder="Search...">-->
<!--                            <button type="submit" class="flex justify-content-center align-items-center">Search</button>-->
<!--                        </form><!-- .flex -->
<!--                    </div><!-- .search-widget -->

<!--                    <div class="sidebar-cats">-->
<!--                        <h2 class="widget-title">Categories</h2>-->

<!--                        <ul class="p-0 m-0">-->
<!--                            <li><a href="#">Radiology</a></li>-->
<!--                            <li><a href="#">Cardiology</a></li>-->
<!--                            <li><a href="#">Gastroenterology</a></li>-->
<!--                            <li><a href="#">Neurology</a></li>-->
<!--                            <li><a href="#">General surgery</a></li>-->
<!--                        </ul>-->
<!--                    </div>-->

<!--                    <div class="popular-posts">-->
<!--                        <h2 class="widget-title">Latest Posts</h2>-->

<!--                        <ul class="p-0 m-0">-->
<!--                            <li class="d-flex flex-wrap justify-content-between">-->
<!--                                <figure><a href="#"><img src="images/p-1.jpg" alt=""></a></figure>-->

<!--                                <div class="entry-content">-->
<!--                                    <h3 class="entry-title"><a href="#">A big discovery for medicine worldwide</a></h3>-->

<!--                                    <div class="posted-date">Feb 05, 2018</div>-->
<!--                                </div>-->
<!--                            </li>-->

<!--                            <li class="d-flex flex-wrap justify-content-between">-->
<!--                                <figure><a href="#"><img src="images/p-2.jpg" alt=""></a></figure>-->

<!--                                <div class="entry-content">-->
<!--                                    <h3 class="entry-title"><a href="#">Dentistry for everybody under 18</a></h3>-->

<!--                                    <div class="posted-date">Feb 05, 2018</div>-->
<!--                                </div>-->
<!--                            </li>-->

<!--                            <li class="d-flex flex-wrap justify-content-between">-->
<!--                                <figure><a href="#"><img src="images/p-3.jpg" alt=""></a></figure>-->

<!--                                <div class="entry-content">-->
<!--                                    <h3 class="entry-title"><a href="#">When it’s time to take pills</a></h3>-->

<!--                                    <div class="posted-date">Feb 05, 2018</div>-->
<!--                                </div>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </div><!-- .cat-links -->

<!--                    <div class="opening-hours">-->
<!--                        <h2 class="d-flex align-items-center">Opening Hours</h2>-->

<!--                        <ul class="p-0 m-0">-->
<!--                            <li>Monday - Thursday <span>8.00 - 19.00</span></li>-->
<!--                            <li>Friday <span>8.00 - 18.30</span></li>-->
<!--                            <li>Saturday <span>9.30 - 17.00</span></li>-->
<!--                            <li>Sunday <span>9.30 - 15.00</span></li>-->
<!--                        </ul>-->
<!--                    </div>-->

<!--                    <div class="emergency-box">-->
<!--                        <h2 class="d-flex align-items-center">Emergency</h2>-->

<!--                        <div class="call-btn text-center">-->
<!--                            <a class="d-flex justify-content-center align-items-center button gradient-bg" href="#"><img src="images/emergency-call.png"> +34 586 778 8892</a>-->
<!--                        </div>-->

<!--                        <p>Lorem ipsum dolor sit amet, cons ectetur adipiscing elit. Donec males uada lorem maximus mauris sceler isque, at rutrum nulla.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

<!--    <div class="subscribe-banner">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-12 col-lg-8 offset-lg-2">-->
<!--                    <h2>Subscribe to our newsletter</h2>-->

<!--                    <form>-->
<!--                        <input type="email" placeholder="E-mail address">-->
<!--                        <input class="button gradient-bg" type="submit" value="Subscribe">-->
<!--                    </form>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

<!--    <footer class="site-footer">-->
<!--        <div class="footer-widgets">-->
<!--            <div class="container">-->
<!--                <div class="row">-->
<!--                    <div class="col-12 col-md-6 col-lg-4">-->
<!--                        <div class="foot-about">-->
<!--                            <h2><a href="#">YesDoct</a></h2>-->

<!--                            <p>Let us help you stay healthy !<br>Our doctor is specialized in providing all basis health consultations and second opinion, he will take care of your all acute and chronic cases, includung diabetes, hypertension, asthma, Labs, pregnancy, joint pain, renal health, liver health, sexual issues as well as mental satisfaction.</p>-->

<!--                            <p class="copyright">-->
<!--Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved -->
<!--</p>-->
<!--                        </div><!-- .foot-about -->
<!--                    </div><!-- .col -->

<!--                    <div class="col-12 col-md-6 col-lg-4 mt-5 mt-md-0">-->
<!--                        <div class="foot-contact">-->
<!--                            <h2>Contact</h2>-->
<!--                            <a href="contact.php" target="_blank">Book Consultation Now</a>-->
<!--                        </div>-->
<!--                    </div><!-- .col -->

<!--                    <div class="col-12 col-md-6 col-lg-4 mt-5 mt-md-0">-->
<!--                        <div class="foot-links">-->
<!--                            <h2>Usefull Links</h2>-->

<!--                            <ul class="p-0 m-0">-->
<!--                                <li><a href="index.php">Home</a></li>-->
<!--                                <li><a href="about.php">About us</a></li>-->
<!--                                <li><a href="Services.php">Diseases</a></li>-->
<!--                                <li><a href="contact.php">Book Appointment</a></li>-->
<!--                                <li><a href="news.php">FAQ</a></li>-->
<!--                                <li><a href="services.php">Testimonials</a></li>-->
<!--                            </ul>-->
<!--                        </div><!-- .foot-links -->
<!--                    </div><!-- .col -->
<!--                </div><!-- .row -->
<!--            </div><!-- .container -->
<!--        </div><!-- .footer-widgets -->
<!--    </footer><!-- .site-footer -->
<!--    <script type='text/javascript' src='js/jquery.js'></script>-->
<!--    <script type='text/javascript' src='js/jquery.collapsible.min.js'></script>-->
<!--    <script type='text/javascript' src='js/swiper.min.js'></script>-->
<!--    <script type='text/javascript' src='js/jquery.countdown.min.js'></script>-->
<!--    <script type='text/javascript' src='js/circle-progress.min.js'></script>-->
<!--    <script type='text/javascript' src='js/jquery.countTo.min.js'></script>-->
<!--    <script type='text/javascript' src='js/jquery.barfiller.js'></script>-->
<!--    <script type='text/javascript' src='js/custom.js'></script>-->
<!--</body>-->
<!--</html>-->



<!-- According to new changes -->



<?php

   
//    $_SESSION['id']=$num['packageid'];
//    $a=$_SESSION['id'];
//    echo '<script>alert("'.$num['packageid'].'")</script>';
    
//     }
// if (isset($_POST['submit'])) {
//      $_SESSION['packageid'] = $_POST['packageid'];
//     echo '<script>alert("'.$a.'")</script>';
// } else {
//       echo"error";
// }  ;       




// if(isset($_POST['submit'])){
// // Fetching variables of the form which travels in URL
// $name = $_POST['name'];
// $email = $_POST['email'];
// $phone = $_POST['phone'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Yesdoct</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
    <style>
      #hyperlink-style-button{
        cursor: pointer; 
      }
        .icn{
            font-size: 3rem;
        }
    </style>
</head>
<body class="single-page blog-page">
    <header class="site-header">
        <div class="nav-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                        <div class="site-branding d-flex align-items-center">
                            <a class="d-block" href="index.php" rel="home"><h1>Yes Doct</h1></a>
                        </div><!-- .site-branding -->

                        <nav class="site-navigation d-flex justify-content-end align-items-center">
                            <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-items-center">
                                <li ><a href="index.php">Home</a></li>
                                <li><a href="services.php">Diseases</a></li>
                                <li class="current-menu-item"><a href="news.php">Packages</a></li>
                                <li><a href="about.php">About us</a></li>
                                <li><a href="contact.php">Book Appointment</a></li>

                                <!-- <li class="call-btn button gradient-bg mt-3 mt-md-0">
                                    <a class="d-flex justify-content-center align-items-center" href="#"><img src="images/emergency-call.png"> +34 586 778 8892</a>
                                </li> -->
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
                    <h1>Packages</h1>

                    <div class="breadcrumbs">
                        <ul class="d-flex flex-wrap align-items-center p-0 m-0">
                            <li><a href="#">Home</a></li>
                            <li>Packages</li>
                        </ul>
                    </div><!-- .breadcrumbs -->
                </div>
            </div>
        </div>

        <img class="header-img" src="images/news-bg.png" alt="">
    </header><!-- .site-header -->

    <!-- <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="the-news">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="the-news-wrap">
                                <figure class="post-thumbnail">
                                    <a href="#"><img src="images/news-1.png" alt=""></a>
                                </figure>

                                <header class="entry-header">
                                    <h3>The latest in Medicine</h3>

                                    <div class="post-metas d-flex flex-wrap align-items-center">
                                        <div class="posted-date"><label>Date: </label><a href="#">April 12, 2018</a></div>

                                        <div class="posted-by"><label>By: </label><a href="#">Dr. Jake Williams</a></div>

                                        <div class="post-comments"><a href="#">2 Comments</a></div>
                                    </div>
                                </header>

                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. </p>
                                </div>

                                <footer class="entry-footer mt-5">
                                    <a class="button gradient-bg" href="#">Read More</a>
                                </footer>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="the-news-wrap">
                                <figure class="post-thumbnail">
                                    <a href="#"><img src="images/news-2.png" alt=""></a>
                                </figure>

                                <header class="entry-header">
                                    <h3>All you need to know about pills</h3>

                                    <div class="post-metas d-flex flex-wrap align-items-center">
                                        <div class="posted-date"><label>Date: </label><a href="#">April 12, 2018</a></div>

                                        <div class="posted-by"><label>By: </label><a href="#">Dr. Jake Williams</a></div>

                                        <div class="post-comments"><a href="#">2 Comments</a></div>
                                    </div>
                                </header>

                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. </p>
                                </div>

                                <footer class="entry-footer mt-5">
                                    <a class="button gradient-bg" href="#">Read More</a>
                                </footer>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="the-news-wrap">
                                <figure class="post-thumbnail">
                                    <a href="#"><img src="images/news-6.png" alt=""></a>
                                </figure>

                                <header class="entry-header">
                                    <h3>Marketing and Medicine</h3>

                                    <div class="post-metas d-flex flex-wrap align-items-center">
                                        <div class="posted-date"><label>Date: </label><a href="#">April 12, 2018</a></div>

                                        <div class="posted-by"><label>By: </label><a href="#">Dr. Jake Williams</a></div>

                                        <div class="post-comments"><a href="#">2 Comments</a></div>
                                    </div>
                                </header>

                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. </p>
                                </div>

                                <footer class="entry-footer mt-5">
                                    <a class="button gradient-bg" href="#">Read More</a>
                                </footer>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="the-news-wrap">
                                <figure class="post-thumbnail">
                                    <a href="#"><img src="images/news-4.png" alt=""></a>
                                </figure>

                                <header class="entry-header">
                                    <h3>Marketing and Medicine</h3>

                                    <div class="post-metas d-flex flex-wrap align-items-center">
                                        <div class="posted-date"><label>Date: </label><a href="#">April 12, 2018</a></div>

                                        <div class="posted-by"><label>By: </label><a href="#">Dr. Jake Williams</a></div>

                                        <div class="post-comments"><a href="#">2 Comments</a></div>
                                    </div>
                                </header>

                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. </p>
                                </div>

                                <footer class="entry-footer mt-5">
                                    <a class="button gradient-bg" href="#">Read More</a>
                                </footer>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="the-news-wrap">
                                <figure class="post-thumbnail">
                                    <a href="#"><img src="images/news-5.png" alt=""></a>
                                </figure>

                                <header class="entry-header">
                                    <h3>Marketing and Medicine</h3>

                                    <div class="post-metas d-flex flex-wrap align-items-center">
                                        <div class="posted-date"><label>Date: </label><a href="#">April 12, 2018</a></div>

                                        <div class="posted-by"><label>By: </label><a href="#">Dr. Jake Williams</a></div>

                                        <div class="post-comments"><a href="#">2 Comments</a></div>
                                    </div>
                                </header>

                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. </p>
                                </div>

                                <footer class="entry-footer mt-5">
                                    <a class="button gradient-bg" href="#">Read More</a>
                                </footer>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="the-news-wrap">
                                <figure class="post-thumbnail">
                                    <a href="#"><img src="images/news-3.png" alt=""></a>
                                </figure>

                                <header class="entry-header">
                                    <h3>Marketing and Medicine</h3>

                                    <div class="post-metas d-flex flex-wrap align-items-center">
                                        <div class="posted-date"><label>Date: </label><a href="#">April 12, 2018</a></div>

                                        <div class="posted-by"><label>By: </label><a href="#">Dr. Jake Williams</a></div>

                                        <div class="post-comments"><a href="#">2 Comments</a></div>
                                    </div>
                                </header>

                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. </p>
                                </div>

                                <footer class="entry-footer mt-5">
                                    <a class="button gradient-bg" href="#">Read More</a>
                                </footer>
                            </div>
                        </div>

                        <div class="col-12">
                            <ul class="pagination d-flex flex-wrap align-items-center p-0">
                                <li class="active"><a href="#">01</a></li>
                                <li><a href="#">02</a></li>
                                <li><a href="#">03</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="sidebar">
                    <div class="search-widget">
                        <form class="flex flex-wrap align-items-center">
                            <input type="search" placeholder="Search...">
                            <button type="submit" class="flex justify-content-center align-items-center">Search</button>
                        </form><!-- .flex --
                    </div><!-- .search-widget --

                    <div class="sidebar-cats">
                        <h2 class="widget-title">Categories</h2>

                        <ul class="p-0 m-0">
                            <li><a href="#">Radiology</a></li>
                            <li><a href="#">Cardiology</a></li>
                            <li><a href="#">Gastroenterology</a></li>
                            <li><a href="#">Neurology</a></li>
                            <li><a href="#">General surgery</a></li>
                        </ul>
                    </div>

                    <div class="popular-posts">
                        <h2 class="widget-title">Latest Posts</h2>

                        <ul class="p-0 m-0">
                            <li class="d-flex flex-wrap justify-content-between">
                                <figure><a href="#"><img src="images/p-1.jpg" alt=""></a></figure>

                                <div class="entry-content">
                                    <h3 class="entry-title"><a href="#">A big discovery for medicine worldwide</a></h3>

                                    <div class="posted-date">Feb 05, 2018</div>
                                </div>
                            </li>

                            <li class="d-flex flex-wrap justify-content-between">
                                <figure><a href="#"><img src="images/p-2.jpg" alt=""></a></figure>

                                <div class="entry-content">
                                    <h3 class="entry-title"><a href="#">Dentistry for everybody under 18</a></h3>

                                    <div class="posted-date">Feb 05, 2018</div>
                                </div>
                            </li>

                            <li class="d-flex flex-wrap justify-content-between">
                                <figure><a href="#"><img src="images/p-3.jpg" alt=""></a></figure>

                                <div class="entry-content">
                                    <h3 class="entry-title"><a href="#">When it’s time to take pills</a></h3>

                                    <div class="posted-date">Feb 05, 2018</div>
                                </div>
                            </li>
                        </ul>
                    </div><!-- .cat-links --

                    <div class="opening-hours">
                        <h2 class="d-flex align-items-center">Opening Hours</h2>

                        <ul class="p-0 m-0">
                            <li>Monday - Thursday <span>8.00 - 19.00</span></li>
                            <li>Friday <span>8.00 - 18.30</span></li>
                            <li>Saturday <span>9.30 - 17.00</span></li>
                            <li>Sunday <span>9.30 - 15.00</span></li>
                        </ul>
                    </div>

                    <div class="emergency-box">
                        <h2 class="d-flex align-items-center">Emergency</h2>

                        <div class="call-btn text-center">
                            <a class="d-flex justify-content-center align-items-center button gradient-bg" href="#"><img src="images/emergency-call.png"> +34 586 778 8892</a>
                        </div>

                        <p>Lorem ipsum dolor sit amet, cons ectetur adipiscing elit. Donec males uada lorem maximus mauris sceler isque, at rutrum nulla.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div class="the-news">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Packages</h2>

                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="the-news-wrap">
                                <figure class="post-thumbnail">
                                    <a href="#"><img src="images/image001.jpg" alt=""></a>
                                </figure>

                                <header class="entry-header">
                                    <h3>Diabetes & Hypertension 1 year follow up plan</h3>

                                    <div class="post-metas d-flex flex-wrap align-items-center">
                                        <div class="posted-date"><label>Price: </label><a href="#">3000$ USD</a></div>

                                        <!-- <div class="posted-by"><label>By: </label><a href="#">Dr. Jake Williams</a></div>

                                        <div class="post-comments"><a href="#">2 Comments</a></div> -->
                                    </div>
                                </header>

                                <div class="entry-content">
                                    <p>One year plan for Chronic diseases such as diabetes and hypertension  follow up for you and your life partner, including kidney function, liver function, heart health, lipid control,  eyes, brain, feet care and all complications.</p>
                                </div>
                            </div>
                            <form enctype="multipart/form-data" action="news.php" method="post">
                        <input type="hidden" name="id" value="1"/>
                        <input type="submit" name="submit" value="Proceed" id="hyperlink-style-button" class="call-btn button gradient-bg mt-3 mt-md-0"/>
                        </form>
                        <?php if (isset($_POST['submit'])) {
                              $pid = $_POST['id'];
                              $_SESSION['packageid'] = $pid;
                                                           
                            
                              echo '<script>window.location = "package-subscription.php";</script>';
                            };

                            //   echo '<script>alert("'.$_SESSION['packageid'].'")</script>';
                        ?>
     
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="the-news-wrap">
                                <figure class="post-thumbnail">
                                    <a href="#"><img src="images/image007.jpg" alt=""></a>
                                </figure>

                                <header class="entry-header">
                                    <h3>Weight Management</h3>

                                    <div class="post-metas d-flex flex-wrap align-items-center">
                                        <div class="posted-date"><label>Validity: </label><a href="#">6 Months</a></div>

                                        <div class="posted-by"><label>Price: </label><a href="#">3000$ USD</a></div>

                                        <!-- <div class="post-comments"><a href="#">2 Comments</a></div> -->
                                    </div>
                                </header>

                                <div class="entry-content">
                                    <p>What you eat and how much you burn your calories must be balanced in order to achieve and maintain healthy weight, Probably people don't eat healthy and don't exercise as much as recommended to reach their goals, you will not receive the full benefit of weight loss, and vice versa, if you don't do weight management as recommended. We can help you on ways to incorporate healthy eating and exercise, bring you diet plans, help you out with every day plans of eating, cooking and working out with experienced physician.</p>
                                </div>
                                <!-- <a href="package-subscription.php?packageid=2"><img src="images/image005.jpg"></a> -->
                                <form enctype="multipart/form-data" action="news.php" method="post">
                        <input type="hidden" name="id" value="2"/>
                        <input type="submit" name="submit" value="Proceed" id="hyperlink-style-button" class="call-btn button gradient-bg mt-3 mt-md-0"/>
                        </form>
                        <?php if (isset($_POST['submit'])) {
                              $pid = $_POST['id'];
                              $_SESSION['packageid'] = $pid;
                              echo '<script>window.location = "package-subscription.php";</script>';
                                                           };
                            //   echo '<script>alert("'.$_SESSION['packageid'].'")</script>';
                        ?>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="the-news-wrap">
                                <figure class="post-thumbnail">
                                    <a href="#"><img src="images/image011.jpg" alt=""></a>
                                </figure>

                                <header class="entry-header">
                                    <h3>Nutrition Expert Advice </h3>

                                    <div class="post-metas d-flex flex-wrap align-items-center">
                                        <div class="posted-date"><label>Validity: </label><a href="#">Twice a month-Follow up for 1 Year.</a></div>

                                        <div class="posted-by"><label>Price: </label><a href="#">1500$ USD</a></div>

                                        <!-- <div class="post-comments"><a href="#">2 Comments</a></div> -->
                                    </div>
                                </header>

                                <div class="entry-content">
                                    <p>Staying healthy , detoxified and away from long term diseases was not always easy If you are ready to give up bad eating habits and eat healthy, live healthy, perform healthy and stay away from acute and chronic diseases we are here to assist you, you are what you eat, if you are not eating healthy surely you are going to get one day Overweight, diabetes, hypertension, allergies, cancer, i.e. let us help you eat healthy and live healthy</p>
                                </div>
                                <!-- <a href="package-subscription.php?packageid=3"><img src="images/image005.jpg"></a> -->
                                <form enctype="multipart/form-data" action="news.php" method="post">
                        <input type="hidden" name="id" value="3"/>
                        <input type="submit" name="submit" value="Proceed" id="hyperlink-style-button" class="call-btn button gradient-bg mt-3 mt-md-0"/>
                        </form>
                        <?php if (isset($_POST['submit'])) {
                              $pid = $_POST['id'];
                              $_SESSION['packageid'] = $pid;
                              echo '<script>window.location = "package-subscription.php";</script>';
                                                           };
                            //   echo '<script>alert("'.$_SESSION['packageid'].'")</script>';
                        ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
                            <div class="the-news-wrap">
                                <figure class="post-thumbnail">
                                    <a href="#"><img src="images/image013.jpg" alt=""></a>
                                </figure>

                                <header class="entry-header">
                                    <h3>Full life health consultation</h3>

                                    <div class="post-metas d-flex flex-wrap align-items-center">
                                        <div class="posted-date"><label>Price: </label><a href="#">15,000$ USD (For Couple)</a></div>

                                        <!-- <div class="posted-by"><label>By: </label><a href="#">Dr. Jake Williams</a></div>

                                        <div class="post-comments"><a href="#">2 Comments</a></div> -->
                                    </div>
                                </header>

                                <div class="entry-content">
                                    <p>Full life health consultation, queries regarding any concerns about your health, second opinion about your lab reports, investigations, diagnosis, treatment, healthy living, weight loss, weight gain, diet issues. Consult any acute or chronic illnesses with physician about you and your life partner.</p>
                                </div>
                                <!-- <a href="package-subscription.php?packageid=4"><img src="images/image005.jpg"></a> -->
                                <form enctype="multipart/form-data" action="news.php" method="post">
                        <input type="hidden" name="id" value="4"/>
                        <input type="submit" name="submit" value="Proceed" id="hyperlink-style-button" class="call-btn button gradient-bg mt-3 mt-md-0"/>
                        </form>
                        <?php if (isset($_POST['submit'])) {
                              $pid = $_POST['id'];
                              $_SESSION['packageid'] = $pid;
                              echo '<script>window.location = "package-subscription.php";</script>';
                                                           };
                            //   echo '<script>alert("'.$_SESSION['packageid'].'")</script>';
                        ?>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="the-news-wrap">
                                <figure class="post-thumbnail">
                                    <a href="#"><img src="images/image016.jpg" alt=""></a>
                                </figure>

                                <header class="entry-header">
                                    <h3>Pregnant & Female Health care</h3>

                                    <div class="post-metas d-flex flex-wrap align-items-center">
                                        <div class="posted-date"><label>Price: </label><a href="#">1000$ USD</a></div>

                                        <!-- <div class="posted-by"><label>By: </label><a href="#">Dr. Jake Williams</a></div>

                                        <div class="post-comments"><a href="#">2 Comments</a></div> -->
                                    </div>
                                </header>

                                <div class="entry-content">
                                    <p>Follow up for full pregnancy 40 weeks and 3 months before pregnancy questions about not getting pregnant or infection risks, vitamins & diet, Pregnancy first trimester concerns , second trimester concerns, third trimester concerns, baby health , baby growth , mothers health, Post delivery one month follow up advise.</p>
                                </div>
                                <!-- <a href="package-subscription.php?packageid=5"><img src="images/image005.jpg"></a> -->
                                <form enctype="multipart/form-data" action="news.php" method="post">
                        <input type="hidden" name="id" value="5"/>
                        <input type="submit" name="submit" value="Proceed" id="hyperlink-style-button" class="call-btn button gradient-bg mt-3 mt-md-0"/>
                        </form>
                        <?php if (isset($_POST['submit'])) {
                              $pid = $_POST['id'];
                              $_SESSION['packageid'] = $pid;
                              echo '<script>window.location = "package-subscription.php";</script>';
                                                           };
                            //   echo '<script>alert("'.$_SESSION['packageid'].'")</script>';
                        ?>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="the-news-wrap">
                                <figure class="post-thumbnail">
                                    <a href="#"><img src="images/image018.jpg" alt=""></a>
                                </figure>

                                <header class="entry-header">
                                    <h3>Weight Loss Quick Tele-Consultation call</h3>

                                    <div class="post-metas d-flex flex-wrap align-items-center">
                                        <div class="posted-date"><label>Price: </label><a href="#">150$ USD</a></div>

                                        <!-- <div class="posted-by"><label>By: </label><a href="#">Dr. Jake Williams</a></div>

                                        <div class="post-comments"><a href="#">2 Comments</a></div> -->
                                    </div>
                                </header>

                                <div class="entry-content">
                                    <p>Weight Loss Quick Tele-Consultation call 50 minutes video talk with physician about your health, weight loss and diet </p>
                                </div>
                            </div>
                            <!-- <a href="package-subscription.php?packageid=6" .$package='6'><img src="images/image005.jpg"></a> -->
                            <form enctype="multipart/form-data" action="news.php" method="post">
                        <input type="hidden" name="id" value="6"/>
                        <input type="submit" name="submit" value="Proceed" id="hyperlink-style-button" class="call-btn button gradient-bg mt-3 mt-md-0"/>
                        </form>
                        <?php if (isset($_POST['submit'])) {
                              $pid = $_POST['id'];
                              $_SESSION['packageid'] = $pid;
                              echo '<script>window.location = "package-subscription.php";</script>';
                                                           };
                            //   echo '<script>alert("'.$_SESSION['packageid'].'")</script>';
                        ?>
                        </div>
            </div>    
        </div>
    </div>

    <div class="subscribe-banner">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 offset-lg-2">
                    <h2>Subscribe to our newsletter</h2>

                    <form>
                        <input type="email" placeholder="E-mail address">
                        <input class="button gradient-bg" type="submit" value="Subscribe">
                    </form>
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

                            <p class="copyright"><!-- Link back to HS & Codeditors can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://hibasheikh.com" target="_blank">HS</a>&<a href="https://thecodeditors.com" target="_blank">Codeditors</a>
<!-- Link back to HS & Codeditors can't be removed. Template is licensed under CC BY 3.0. --></p>
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