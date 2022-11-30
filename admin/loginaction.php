<?php
include("db.php");
SESSION_START();
//echo $_POST['email'];
if($_POST['email'] !='') {
	$email = $_POST['email'];
$pass = $_POST['password'];
$sq = "SELECT * FROM `admin` where email='".$email."' and password='".$pass."'";
	//echo "SELECT * FROM registration where email='".$email."' and password='".$pass."'";
	$count = $db_handle->numRows($sq);
	//echo $count;
	if($count==1) {
	$resultsa=$db_handle->runQuery($sq);
	foreach($resultsa as $data) {
		$_SESSION['madmin']	=$data['email'];
	}
	
echo '<script>
alert( "Login Successfully!");location.replace("home.php");</script>';
	}
	// elseif(($email==$data['email']) &&( $pass!=$data['email'])) {
		
	// echo '<script>alert("Please Enter Correct Password ");
	// location.replace("index.php");</script>';
	// }
	
	
	
	
	else {  
	echo '<script>alert( "Details are incorrect!");
	location.replace("index.php");</script>';}
	
	
}
				?>