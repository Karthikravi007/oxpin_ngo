<?php
include("db.php");
 error_reporting(0);

$id= $_REQUEST["update_id"];
$name= $_REQUEST["edit_heading"];
$des= $_REQUEST["edit_description"];
if(is_uploaded_file($_FILES['image']['tmp_name'])) {
	$sourcePath = $_FILES['image']['tmp_name'];
	$targetPath = "./img/uploads".$_FILES['image']['name'];
	
	
// echo "UPDATE `homeproject` SET  `heading`='".$name."',`image`='".$targetPath."' where id='".$id."'";exit;
	if(move_uploaded_file($sourcePath,$targetPath)) {

		$result = $db_handle->runQuery("UPDATE `other-service` SET  `heading`='".$name."',`image`='".$targetPath."' where id='".$id."'");
		echo '<script>alert(" Updated Successfully ");
		window.location.href="otherservice.php"; </script>';
	}
}
 else{
	$result1 = $db_handle->runQuery("UPDATE `other-service` SET  `heading`='".$name."',`description`='".$des."' where id='".$id."'");
	echo '<script>alert(" Updated Successfully ");
	window.location.href="otherservice.php"; </script>';

	 
 }


	?>