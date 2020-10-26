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
                                <li class="current-menu-item"><a href="index.php">Home</a></li>
                                <li class="d"><a href="services.php">Diseases</a>
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

<div class="our-departments">
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
                       // Include configuration file 
                       include_once 'hms/include/config.php'; 
                       $alpha=$_GET["alpha"];
                     $ret=mysqli_query($con,"SELECT * from diseasename where d_name like '$alpha%'");
                     if (mysqli_num_rows($ret)) {
                      while ($row=mysqli_fetch_array($ret)) {
                               ?>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="our-departments-cont">
                                <header class="entry-header d-flex flex-wrap align-items-center">
                                    <!-- <img src="images/cardiogram.png" alt=""> -->

                                    <h3><?php  echo $row['d_name'];?></h3>
                                </header>

                                <div class="entry-content">
                                    <p><?php  echo $row['intro'];?></p>
                                </div>

                                <footer class="entry-footer">
                                <a href="diseases_details.php?q=<?php  echo $row['id'];?>">read more</a>
                                </footer>
                            </div>
                        </div>
                        <?php }}
                        else {?>
                        <div class="our-departments-wrap" style="text-align:centre; padding: 2%; float:center  ">
                         <h3 style="color:white; text-align: centre">  <?php echo'No disease from this letter in database.';?></h3>
                        </div>  
                        <?php
                        }
                        ?>
                        </div> 
                        </div> 
                        </div> 
                        </div> 
                        </div> 
                        <div class="container" style="padding: 1% 3%;  text-align: center">
                    <h2 style="color: white">Consult a doctor if you have any question</h2>
                        
                     <a href="contact.php" class="button gradient-bg"  style="padding: 10px;">Consult Now</a>
                        
                        