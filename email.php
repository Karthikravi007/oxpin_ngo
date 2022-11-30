<?php 
include ('admin/config.php');
error_reporting(0);

 
	$name=$_POST['name'];
	// $lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
    $subject=$_POST['subject'];
    $comment=$_POST['comment'];
    session_start();
    
  $emailID='ashok09042000@gmail.com';
  
//echo $emailID;exit;
    $ToEmail = $emailID;
	$EmailSubject = 'Contact Details';
	$mailheader = "From: ".$email."\r\n";
	$mailheader .= "Reply-To: ".$email."\r\n";
	$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";
	
	// $MESSAGE_BODY = "<style>td{font-size:44px;}</style><body style='border:2px solid #0c4da2;padding:50px;border-radius: 34px;'><center><table><tr><td><b>"."Name"."</b></td><td>".$name."</td></tr>"; 
	$MESSAGE_BODY .= "<tr><td><b>"."Name"."</b></td><td>".$name."</td></tr>"; 
	$MESSAGE_BODY .= "<tr><td><b>"."Email"."</b></td><td>".$email."</td></tr>";
    $MESSAGE_BODY .= "<tr><td><b>"."Phone"."</b></td><td>".$phone."</td></tr>";
    $MESSAGE_BODY .= "<tr><td><b>"."Subject"."</b></td><td>".$subject."</td></tr>";
	$MESSAGE_BODY .= "<tr><td><b>"."comment"."</b></td><td>".$comment."</td></tr></table></center></body>"; 
	 
	$sentMailResult=mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) ; 
	if($sentMailResult ) 
	{ 
	$_SESSION['status'] = "Mail Sent";
	header("Location:contact.php");
	
	} 
	else
	{ 
	$_SESSION['status'] = "Sorry but the email could not be sent. 
					Please go back and try again!";
	die(); 
	header("Location:content.php");
	}
  
 
?>
