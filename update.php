<?php
session_start();
// Include configuration file 
include_once 'hms/include/config.php';
    //echo '<script>alert("'.$_SESSION['email'].'")</script>';
    //$update = $con->query("UPDATE queries SET paid = yes WHERE email = ".$_SESSION['email'].";");

    //echo '<script>alert("'.$_SESSION['email'].'")</script>';

    $query="update queries set paid = 'yes' where email = '".$_SESSION['email']."'";

    $res=mysqli_query($con,$query);
    if($res)
    {
        //echo '<script>alert("Paid Successfully")</script>';
        echo "<script>location='index.php'</script>";
        session_unset();
        
    }
    else{
        echo "<script>location='thankyou.php'</script>";
    }
    //echo '<script>alert("q is: '.$query.'")</script>';

                   ?>