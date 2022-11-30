<?php
include("db.php");
 error_reporting(0);

$id= $_REQUEST["update_id"];
$phone= addslashes($_REQUEST["phone"]);
$email= addslashes($_REQUEST["email"]);
$address= addslashes($_REQUEST["address"]);
 {
        // echo "UPDATE `contact` SET  `phone`='".$phone."',`email`='".$email."' ,`address`='".$address."' where id='".$id."'";exit;
		$result = $db_handle->runQuery("UPDATE `contact` SET  `phone`='".$phone."',`email`='".$email."' ,`address`='".$address."' where id='".$id."'");
		echo '<script>alert(" Updated Successfully ");
		window.location.href="contact.php"; </script>';
	}


	?>