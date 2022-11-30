<?php
include("db.php");
 error_reporting(0);

$id= $_REQUEST["update_id"];
$name= $_REQUEST["edit_heading"];
if(is_uploaded_file($_FILES['image']['tmp_name'])) {
	$sourcePath = $_FILES['image']['tmp_name'];
	$targetPath = "./img/uploads".$_FILES['image']['name'];
	
	
// echo "UPDATE `homeproject` SET  `heading`='".$name."',`image`='".$targetPath."' where id='".$id."'";exit;
	if(move_uploaded_file($sourcePath,$targetPath)) {

		$result = $db_handle->runQuery("UPDATE `homeproject` SET  `heading`='".$name."',`image`='".$targetPath."' where id='".$id."'");
		echo '<script>alert(" Updated Successfully ");
		window.location.href="project.php"; </script>';
	}
}
 else{
	$result1 = $db_handle->runQuery("UPDATE `homeproject` SET  `heading`='".$name."' where id='".$id."'");
	echo '<script>alert(" Updated Successfully ");
	window.location.href="project.php"; </script>';

	 
 }


	?>