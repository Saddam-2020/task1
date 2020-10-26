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
    <style>
.icn{
    font-size: 3rem;
}
    </style>
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
                                <li class="current-menu-item"><a href="services.php">Diseases</a>
                                    <!-- <ul class="dc">  <?php
                                                // Include configuration file 
                                                include_once 'hms/include/config.php'; 
                                                $ret=mysqli_query($con,"select d_name from diseasename order by d_name asc");
                                                while ($row=mysqli_fetch_array($ret)) {
                                          ?>
                                       <li><a href="">
                                       <?php  echo $row['d_name'];?>
                                                </a></li>
                                       <?php }?>
                                    </ul> -->
                                </li>
                                <li><a href="news.php">Packages</a></li>
                                <li><a href="about.php">About us</a></li>
                                <li><a href="contact.php">Book Appointment</a></li>
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
                    <h1>Diseases</h1>

                    <div class="breadcrumbs">
                        <ul class="d-flex flex-wrap align-items-center p-0 m-0">
                            <li><a href="#">Home</a></li>
                            <li>Diseases</li>
                        </ul>
                    </div><!-- .breadcrumbs -->
                </div>
            </div>
        </div>

        <img class="header-img" src="images/service-bg.png" alt="">
    </header><!-- .site-header -->

    <!-- <div class="quality-services">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Only Top Quality Services</h2>

                    <div class="row">
                        <div class="col-12 col-md-6">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem ma ximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Curabitur ut augue finibus, luctus tortor at, ornare erat. Nulla facilisi. Sed est risus, laoreet et quam non, malesuada viverra accumsan leo.</p>
                        </div>

                        <div class="col-12 col-md-6">
                            <p>Amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Curabitur ut augue finibus, luctus tortor at, ornare erat. Nulla facilisi. Sed est risus, laoreet et quam non, viverra accumsan leo.</p>
                        </div>
                    </div>

                    <div class="w-100 text-center mt-5">
                        <a class="button gradient-bg" href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="our-departments-wrap">
                    <h2>Diseases</h2>

                    <div class="row">
                    <?php  
  
// Loop to take values from given range 
// and display the range elements 
foreach( range('A', 'Z') as $elements) { 
      
    // Display all alphabetic elements 
    // one after another 
  ?>  
  
  <a style="color: white; padding: 6px" href="diseases.php?alpha=<?php echo $elements;?>" class="">
  <div style="padding: 1% 3%; border:1px solid white; width: 25px; text-align: center">
  
                            
  <?php echo $elements ;?>
    
   </div> 
   </a>
<?php
} 
  
?> 
                    <?php
                    
                      $ret=mysqli_query($con,"select * from diseasename limit 3");
                      while ($row=mysqli_fetch_array($ret)) {
                               ?>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="our-departments-cont">
                                <header class="entry-header d-flex flex-wrap align-items-center">
                                    <!-- <img src="images/cardiogram.png" alt=""> -->

                                    <h3><?php echo $row['d_name'];?></h3>
                                </header>

                                <div class="entry-content">
                                    <p><?php  echo $row['intro'];?></p>
                                </div>

                                <footer class="entry-footer">
                                <a href="diseases_details.php?q=<?php  echo $row['id'];?>">read more</a>
                                </footer>
                            </div>
                        </div>
                        <?php }?> 

                        <!-- <div class="col-12 col-md-6 col-lg-4">
                            <div class="our-departments-cont">
                                <header class="entry-header d-flex flex-wrap align-items-center">
                                    <img src="images/stomach-2.png" alt="">

                                    <h3>Gastroenterology</h3>
                                </header>

                                <div class="entry-content">
                                    <p>Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien.</p>
                                </div>

                                <footer class="entry-footer">
                                    <a href="#">read more</a>
                                </footer>
                            </div>
                        </div> -->

                        <!-- <div class="col-12 col-md-6 col-lg-4">
                            <div class="our-departments-cont">
                                <header class="entry-header d-flex flex-wrap align-items-center">
                                    <img src="images/blood-sample-2.png" alt="">

                                    <h3>Medical Lab</h3>
                                </header>

                                <div class="entry-content">
                                    <p>Lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus.</p>
                                </div>

                                <footer class="entry-footer">
                                    <a href="#">read more</a>
                                </footer>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="our-departments-cont">
                                <header class="entry-header d-flex flex-wrap align-items-center">
                                    <img src="images/teeth.png" alt="">

                                    <h3>Dental Care</h3>
                                </header>

                                <div class="entry-content">
                                    <p>Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien.</p>
                                </div>

                                <footer class="entry-footer">
                                    <a href="#">read more</a>
                                </footer>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="our-departments-cont">
                                <header class="entry-header d-flex flex-wrap align-items-center">
                                    <img src="images/stretcher.png" alt="">

                                    <h3>Surgery</h3>
                                </header>

                                <div class="entry-content">
                                    <p>Lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus.</p>
                                </div>

                                <footer class="entry-footer">
                                    <a href="#">read more</a>
                                </footer>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="our-departments-cont">
                                <header class="entry-header d-flex flex-wrap align-items-center">
                                    <img src="images/scanner.png" alt="">

                                    <h3>Neurology</h3>
                                </header>

                                <div class="entry-content">
                                    <p>Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien.</p>
                                </div>

                                <footer class="entry-footer">
                                    <a href="#">read more</a>
                                </footer>
                            </div>
                        </div> -->

                       
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="services-tabs">
                    <div class="tabs">
                        <ul class="tabs-nav d-flex flex-wrap">
                            <li class="tab-nav d-flex justify-content-center align-items-center" data-target="#tab_1">Pellentesque pulvinar</li>
                            <li class="tab-nav d-flex justify-content-center align-items-center" data-target="#tab_2">  Pellentesque lacinia </li>
                            <li class="tab-nav d-flex justify-content-center align-items-center" data-target="#tab_3">Consectetur diam</li>
                            <li class="tab-nav d-flex justify-content-center align-items-center" data-target="#tab_4">CMauris tortor</li>
                            <li class="tab-nav d-flex justify-content-center align-items-center" data-target="#tab_5">Phasellus sit amet</li>
                        </ul>

                        <div class="tabs-container">
                            <div id="tab_1" class="tab-content">
                                <img src="images/service-tab-img.png" alt="">

                                <h4>Scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. </h4>

                                <p>Amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Curabitur ut augue finibus, luctus tortor at, ornare erat. Nulla facilisi. Sed est risus, laoreet et quam non, viverra accumsan leo. Amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus</p>
                            </div>

                            <div id="tab_2" class="tab-content">
                                <img src="images/service-tab-img.png" alt="">

                                <h4>Scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. </h4>

                                <p>Amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Curabitur ut augue finibus, luctus tortor at, ornare erat. Nulla facilisi. Sed est risus, laoreet et quam non, viverra accumsan leo. Amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus</p>
                            </div>

                            <div id="tab_3" class="tab-content">
                                <img src="images/service-tab-img.png" alt="">

                                <h4>Scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. </h4>

                                <p>Amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Curabitur ut augue finibus, luctus tortor at, ornare erat. Nulla facilisi. Sed est risus, laoreet et quam non, viverra accumsan leo. Amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus</p>
                            </div>

                            <div id="tab_4" class="tab-content">
                                <img src="images/service-tab-img.png" alt="">

                                <h4>Scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. </h4>

                                <p>Amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Curabitur ut augue finibus, luctus tortor at, ornare erat. Nulla facilisi. Sed est risus, laoreet et quam non, viverra accumsan leo. Amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus</p>
                            </div>

                            <div id="tab_5" class="tab-content">
                                <img src="images/service-tab-img.png" alt="">

                                <h4>Scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. </h4>

                                <p>Amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Curabitur ut augue finibus, luctus tortor at, ornare erat. Nulla facilisi. Sed est risus, laoreet et quam non, viverra accumsan leo. Amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

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