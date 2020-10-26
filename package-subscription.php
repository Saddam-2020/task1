<?php
session_start();
// Include configuration file 
include_once 'hms/include/config.php'; 
// $ret=mysqli_query($con,"SELECT packageid FROM packages WHERE packageid='".$_GET['packageid']."'");
// $num=mysqli_fetch_array($ret);
// if($num>0)
// {
   
//    $_SESSION['id']=$num['packageid'];
//    $a=$_SESSION['id'];
//   echo '<script>alert("'.$_SESSION['packageid'].'")</script>';
    
    // }
// if (isset($_GET['packageid'])) {
    // $a = $_GET['packageid'];
    // $_SESSION['packageid'] = $_GET['packageid'];
    //echo '<script>alert("'.$a.'")</script>';
// } else {
//      echo"error";
//}  ;       

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>YesDoct</title>

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

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

    <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
   	<link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
   	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

 <style>
   /*Contact sectiom*/
.content-header{
  font-family: 'Oleo Script', cursive;
  color:#fcc500;
  font-size: 45px;
}

.section-content{
  text-align: center; 

}
#contact{
    
    font-family: 'Teko', sans-serif;
  padding-top: 60px;
  width: 100%;
  width: 100vw;
  height: 750px;
  background: #3a6186; /* fallback for old browsers */
  background: -webkit-linear-gradient(to left, #3a6186 , #89253e); /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to left, #3a6186 , #89253e); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    color : #fff;    
}
.contact-section{
  padding-top: 40px;
}
.contact-section .col-md-6{
  width: 50%;
}

.form-line{
  border-right: 1px solid #B29999;
}

.form-group{
  margin-top: 10px;
}
label{
  font-size: 1.3em;
  line-height: 1em;
  font-weight: normal;
}
.form-control{
  font-size: 1.3em;
  color: #080808;
}
textarea.form-control {
    height: 135px;
   /* margin-top: px;*/
}

.submit{
  font-size: 1.1em;
  float: right;
  width: 150px;
  background-color: transparent;
  color: #fff;

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
                            <a class="d-block" href="index.php" rel="home"><h1>Yes Doct</h1></a>
                        </div><!-- .site-branding -->

                        <nav class="site-navigation d-flex justify-content-end align-items-center">
                            <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-items-center">
                                <li><a href="index.php">Home</a></li>
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
                    <h1>Subscribe Package</h1>

                    <div class="breadcrumbs">
                        <ul class="d-flex flex-wrap align-items-center p-0 m-0">
                            <li><a href="#">Home</a></li>
                            <li>Subscribe Package</li>
                        </ul>
                    </div><!-- .breadcrumbs -->

                </div>
            </div>
        </div>

        <img class="header-img" src="images/contact-bg.png" alt="">
    </header><!-- .site-header -->



    <section id="contact">
			<div class="section-content">
				<h1 class="section-header">Get in <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> Touch with us</span></h1>
				<h3></h3>
			</div>
			<div class="contact-section">
			<div class="container">
				<form method="POST" action="package-subscription.php" enctype="multipart/form-data">
					<div class="col-md-12 form-line">
			  			<div class="form-group">
			  				<label for="exampleInputUsername">Your name</label>
					    	<input type="text" class="form-control" id="" placeholder=" Enter Name" name="name" required>
				  		</div>
				  		<div class="form-group">
					    	<label for="exampleInputEmail">Email Address</label>
					    	<input type="email" class="form-control" id="exampleInputEmail" placeholder=" Enter Email id" name="email" required>
					  	</div>	
					  	<div class="form-group">
					    	<label for="telephone">Mobile No./ Whatsapp No.</label>
					    	<input type="tel" class="form-control" id="telephone" placeholder=" Enter 11-digit mobile no." name="phone" required>
			  			</div>
              <!-- <div class="form-group">
					    	<label for="address">Address</label>
					    	<input type="text" class="form-control" id="telephone" placeholder=" Enter your street address" name="address">
			  			</div>  -->
                       <!-- <div class="form-group">
					    	<label for="age">Age</label>
					    	<input type="int" class="form-control" id="telephone" placeholder=" Enter your Age" name="age" required>
			  			</div> 

                          <div class="form-group">
                             <label for="yes_no_radio">Do you have diabetes?</label>
                             <p>
                                <input type="radio" name="yes_no_diabetes" value="yes">Yes</input><span style="padding:10px"></span>
                                <input type="radio" name="yes_no_diabetes" value="no" checked>No</input>
                             </p>
			  			  </div>
                          
                          <div class="form-group">
                            <label for="yes_no_radio">Are you on any medication?</label>
                             <p>
                                <input type="radio" name="yes_no_medication" value="yes">Yes</input><span style="padding:10px"></span>
                                <input type="radio" name="yes_no_medication" value="no" checked>No</input>
                             </p>
                          </div>

              		</div>
               
               
			  		<div class="col-md-6">
			  		
            <div class="form-group">
            <label for="yes_no_radio">Do you have any allergy?</label>
            <p>
              <input type="radio" name="yes_no_allergy" value="yes">Yes</input><span style="padding:10px"></span>
              <input type="radio" name="yes_no_allergy" value="no" checked>No</input>
            </p>
			  			</div>

              <div class="form-group">
            <label for="yes_no_radio">Do you have blood pressure?</label>
            <p>
              <input type="radio" name="yes_no_bp" value="yes">Yes</input><span style="padding:10px"></span>
              <input type="radio" name="yes_no_bp" value="no" checked>No</input>
            </p>
			  			</div> 

              <div class="form-group">
              <label for="yes_no_radio">Do you want to show any symptom?</label>
              <Button type="button" class="btn btn-primary" style="width: 80px; height:40px">upload<input type="file" class="custom-file-input" id="validatedCustomFile" name="image"></Button>
			  			</div>
            
            	<div class="form-group">
			  				<label for ="description"> Tell us how you feel?</label>
			  			 	<textarea  class="form-control" id="description" placeholder="Enter Your Message" name="message" required></textarea>
			  			</div>
              <input type="hidden" name="paid" value="no">
			  			<div> -->

			  				<button name="add" type="submit" class="btn btn-default submit" value="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>    Save & Continue</button>
			  			
                              <?php
if(isset($_POST['add'])){
// Fetching variables of the form which travels in URL
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$a = $_SESSION['packageid'];
$_SESSION['email'] = $email;

// $a = $_GET['packageid'];
// echo '<script>alert("'.$a.'")</script>';

 $insert = $con->query("INSERT INTO subscription(name,email,phone,packageid) VALUES('".$name."','".$email."','".$phone."','".$a."')");
//echo '<script>alert("'.$_GET['packageid'].'")</script>';
// //  To redirect form on a particular page
if($a==1){
    echo '<script>window.location = "pay1.php";</script>';
}
elseif ($a==2) {
    echo '<script>window.location = "pay2.php";</script>';
}
elseif ($a==3) {
    echo '<script>window.location = "pay3.php";</script>';
}
elseif ($a==4) {
    echo '<script>window.location = "pay4.php";</script>';
}
elseif ($a==5) {
    echo '<script>window.location = "pay5.php";</script>';
}
else {
    echo '<script>window.location = "pay6.php";</script>';
}

};

?>
              
              </div>	  			
					</div>
				</form>
			</div>
		</section>







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