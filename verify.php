<?php

require('config.php');
session_start();
error_reporting(0);
//db connection
$conn = mysqli_connect($host, $username, $password, $dbname);

require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true)
{
    $razorpay_order_id = $_SESSION['razorpay_order_id'];
    $razorpay_payment_id = $_POST['razorpay_payment_id'];
    $name = $_SESSION['name'];
    $lastname = $_SESSION['lastname'];
    $message = $_SESSION['message'];
    $email = $_SESSION['email'];
    $price = $_SESSION['donation'];
    $sql = "INSERT INTO `orders` (`razorpay_payment_id`,`name`,`lastname`, `email`, `price`,`message`,`status`) VALUES ('$razorpay_payment_id','$name','$lastname', '$email', '$price','$message','success')";
    if(mysqli_query($conn, $sql)){
        // echo "payment details inserted to db"
		;
    }

    $html='
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<div class="container" style="margin-top:12rem;">
	<div class="card text-center">
  <div class="card-header">
    Payment Status
  </div>
  <div class="card-body">
    <h5 class="card-title">Your payment was successful</h5>
    
    <a href="index.php" class="btn btn-primary">Back</a>
  </div>
  <div class="card-footer text-muted">
    
  </div>
  </div>
</div>';
			
			 

    
}
else
{
    $html = "<p>Your payment failed</p>
             <p>{$error}</p>";
}

echo $html;
