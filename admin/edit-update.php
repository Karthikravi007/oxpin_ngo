<?php
include("db.php");
 error_reporting(0);

$id= $_REQUEST["update_id"];
$name= addslashes($_REQUEST["edit_heading"]);
$sub= addslashes($_REQUEST["edit_subheading"]);
if(is_uploaded_file($_FILES['image']['tmp_name'])) {
	$sourcePath = $_FILES['image']['tmp_name'];
	$targetPath = "img/uploads/".$_FILES['image']['name'];
	
	}

	if(move_uploaded_file($sourcePath,$targetPath)) {

		$result = $db_handle->runQuery("UPDATE `slider` SET  `heading`='".$name."',`subheading`='".$sub."' ,`image`='".$targetPath."' where id='".$id."'");
		echo '<script>alert(" Updated Successfully ");
		window.location.href="home.php"; </script>';
	}


	
else{
$result1 = $db_handle->runQuery("UPDATE `slider` SET  `heading`='".$name."',`subheading`='".$sub."'  where id='".$id."'");
echo '<script>alert(" Updated Successfully ");
window.location.href="home.php"; </script>';

}	
	//  echo "INSERT INTO `home` (`id`,`name`,`link`)values(NULL,'".$name."','".$link."')";
	// exit;


// else{
//     $result1 = $db_handle->runQuery("UPDATE `home` SET  `heading`='".$name."',`subheading`='".$subheading."',`description`='".$email."' where id='".$id."'");
//     echo '<script>alert(" Updated Successfully ");
// window.location.href="mothertable.php"; </script>';

	?>