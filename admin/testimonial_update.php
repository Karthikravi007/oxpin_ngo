<?php
include("db.php");
 error_reporting(0);

$id= $_REQUEST["update_id"];
$name= addslashes($_REQUEST["edit_heading"]);
$sub= addslashes($_REQUEST["edit_subheading"]);
$description= addslashes($_REQUEST["description"]);
if(is_uploaded_file($_FILES['image']['tmp_name'])) {
	$sourcePath = $_FILES['image']['tmp_name'];
	$targetPath = "img/uploads/".$_FILES['image']['name'];
	
	}

	if(move_uploaded_file($sourcePath,$targetPath)) {

		$result = $db_handle->runQuery("UPDATE `testimonial` SET  `heading`='".$name."',`subheading`='".$sub."',`description`='".$description."',`image`='".$targetPath."' where id='".$id."'");
		echo '<script>alert(" Updated Successfully ");
		window.location.href="testimonial.php"; </script>';
	}


	
else{
$result1 = $db_handle->runQuery("UPDATE `testimonial` SET  `heading`='".$name."',`subheading`='".$sub."',`description`='".$description."'  where id='".$id."'");
echo '<script>alert(" Updated Successfully ");
window.location.href="testimonial.php"; </script>';

}	


	?>