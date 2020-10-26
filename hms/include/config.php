<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'syednoufil_yesdoct');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
$con1 = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// PayPal configuration 
define('PAYPAL_ID', 'sb-wmx7y2898882@business.example.com'); 
define('PAYPAL_SANDBOX', TRUE); //TRUE or FALSE 
 
define('PAYPAL_RETURN_URL', 'http://thecodeditors.com/test/yesdoct/success.php'); 
define('PAYPAL_CANCEL_URL', 'http://thecodeditors.com/test/yesdoct/cancel.php'); 
define('PAYPAL_NOTIFY_URL', 'http://thecodeditors.com/test/yesdoct/ipn.php'); 
define('PAYPAL_CURRENCY', 'USD'); 
 
// Database configuration 
// define('DB_HOST', 'local host'); 
// define('DB_USERNAME', 'root'); 
// define('DB_PASSWORD', ''); 
// define('DB_NAME', 'MySQL_Database_Name'); 
 
// Change not required 
define('PAYPAL_URL', (PAYPAL_SANDBOX == true)?"https://www.sandbox.paypal.com/cgi-bin/webscr":"https://www.paypal.com/cgi-bin/webscr");
?>