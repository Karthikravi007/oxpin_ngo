<?php
include("db.php");
 error_reporting(0);

$id= $_REQUEST["update_id"];
$heading= $_REQUEST["heading"];
if(is_uploaded_file($_FILES['image']['tmp_name'])) {
	$sourcePath = $_FILES['image']['tmp_name'];
	$targetPath = "img/uploads/".$_FILES['image']['name'];
	
	}

	if(move_uploaded_file($sourcePath,$targetPath)) {
		$result = $db_handle->runQuery("UPDATE `footer` SET  `heading`='".$heading."',`image`='".$targetPath."' where id='".$id."'");
		echo '<script>alert(" Updated Successfully ");
		window.location.href="footer.php"; </script>';
	}


	
else{
$result1 = $db_handle->runQuery("UPDATE `footer` SET  `heading`='".$heading."' where id='".$id."'");
echo '<script>alert(" Updated Successfully ");
window.location.href="footer.php"; </script>';

}	

	?>