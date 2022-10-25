<?php
require_once "vendor/autoload.php";
 
use Omnipay\Omnipay;
 
define('CLIENT_ID', ''); //your client id
define('CLIENT_SECRET', ''); // client secret
 
define('PAYPAL_RETURN_URL', 'http://localhost/Paypal/success.php'); // this should be changed when hosted
define('PAYPAL_CANCEL_URL', 'http://localhost/Paypal/cancel.php');// this should be changed when hosted
define('PAYPAL_CURRENCY', 'USD'); // set your currency here
 
// Connect with the database
$db = new mysqli('localhost', 'root', '', 'donations'); 
 
if ($db->connect_errno) {
    die("Connect failed: ". $db->connect_error);
}
 
$gateway = Omnipay::create('PayPal_Rest');
$gateway->setClientId(CLIENT_ID);
$gateway->setSecret(CLIENT_SECRET);
$gateway->setTestMode(true); //set it to 'false' when go live

?>