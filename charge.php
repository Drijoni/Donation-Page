<?php
session_start(); 

$_SESSION['fullName'] = $_POST['fullName'];
$_SESSION['message'] = $_POST['message'];

include_once('config.php');
 
if (isset($_POST['submit'])) {
    try {
        $response = $gateway->purchase(array(
            'amount' => $_POST['amount'],
            'currency' => PAYPAL_CURRENCY,
            'returnUrl' => PAYPAL_RETURN_URL,
            'cancelUrl' => PAYPAL_CANCEL_URL,
            ))->send();
 
        if ($response->isRedirect()) {
            $response->redirect(); // this will automatically forward the customer
        } else {
            // not successful
            echo $response->getMessage();
            header("Location:form.php");
        }
    } catch(Exception $e) {
        echo $e->getMessage();
        header("Location:form.php");
    }
}
else {
    header("Location:form.php");
}

?>