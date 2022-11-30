<?php

require('config.php');
require('razorpay-php/Razorpay.php');
session_start();

// Create the Razorpay Order

use Razorpay\Api\Api;

$api = new Api($keyId, $keySecret);

//
// We create an razorpay order using orders api
// Docs: https://docs.razorpay.com/docs/orders
//
$donation = $_POST['donation'];
// echo $donation;exit;
$_SESSION['donation'] = $donation;
$name = $_POST['name']; 
$_SESSION['name'] = $name;
$lastname = $_POST['lastname'];
$_SESSION['lastname'] = $lastname;
$email = $_POST['email'];
$_SESSION['email'] = $email;
$phone = $_POST['phone'];
$_SESSION['phone'] = $phone;
$message = $_POST['message'];
$_SESSION['message'] = $message;
$orderData = [
    'receipt'         => 3456,
    'amount'          => $donation * 100, // 2000 rupees in paise
    'currency'        => 'INR',
    'payment_capture' => 1 // auto capture
];

$razorpayOrder = $api->order->create($orderData);
// echo $orderData['amount'];exit;
$razorpayOrderId = $razorpayOrder['id'];

$_SESSION['razorpay_order_id'] = $razorpayOrderId;

$displayAmount = $amount = $orderData['amount'];

if ($displayCurrency !== 'INR')
{
    $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
    $exchange = json_decode(file_get_contents($url), true);

    $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
}

$data = [
    "key"               => $keyId,
    "amount"            => $amount,
    "name"              => "NGO",
    "description"       => "Payment Gateway",
    "image"             => "logo.png",
    "prefill"           => [
    "name"              => $name,
    "lastname"          => $lastname,
    "phone"             => $phone,
    "email"             => $email,
    "message"           => $message,
    ],
    "notes"             => [
    "address"           => "Hello World",
    "merchant_order_id" => "12312321",
    ],
    "theme"             => [
    "color"             => "#F37254"
    ],
    "order_id"          => $razorpayOrderId,
];

if ($displayCurrency !== 'INR')
{
    $data['display_currency']  = $displayCurrency;
    $data['display_amount']    = $displayAmount;
}

$json = json_encode($data);
// echo $data['display_amount'];exit;
?>
<style>
.razorpay-payment-button{
background-color: #4267b2 ! important;
  border: none;
  border-radius:12px;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  transition: 0.3s;
}

.img{
	height: 75px;
    width: 205px;
}

.razorpay-payment-button:hover {
  background-color: gold !important;
  color: black;
}</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<div class="container" style="margin-top:11rem;float:right;margin-left:130px;">
	
	<div class="col-md-8">
	
	<div class="card text-center ">
  <div class="card-header">
  <h4>Procced to Pay</h4>
  <img src="logo.png"class="img">
  </div>
  <div class="card-body">

<form action="verify.php" method="POST" >
    <!-- <input type="text" value="<?php //echo $data['amount']?>"> -->
  <script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $data['key']?>"
    data-amount="<?php echo $data['amount']?>"
    data-currency="INR"
    data-name="<?php echo $data['name']?>"
    data-image="<?php echo $data['image']?>"
    data-description="<?php echo $data['description']?>"
    data-prefill.name="<?php echo $data['prefill']['name']?>"
    data-prefill.lastname="<?php echo $data['prefill']['lastname']?>"
    data-prefill.phone="<?php echo $data['prefill']['phone']?>"
    data-prefill.email="<?php echo $data['prefill']['email']?>"
    data-prefill.message="<?php echo $data['prefill']['message']?>"
    data-notes.shopping_order_id="3456"
    data-order_id="<?php echo $data['order_id']?>"
    <?php if ($displayCurrency !== 'INR') { ?> data-display_amount="<?php echo $data['display_amount']?>" <?php } ?>
    <?php if ($displayCurrency !== 'INR') { ?> data-display_currency="<?php echo $data['display_currency']?>" <?php } ?>
  >
  </script>
  <!-- Any extra fields to be submitted with the form but not sent to Razorpay -->
  <input type="hidden" name="shopping_order_id" value="3456">
</form>
</div>
</div>
</div>
</div>