<?php
include("db.php");
 error_reporting(0);

$id= $_REQUEST["update_id"];
$name= $_REQUEST["heading"];
$sub= $_REQUEST["subheading"];
// echo "UPDATE `gallery` SET  `heading`='".$name."',`subheading`='".$sub."' ,`image`='".$targetPath."' where id='".$id."'";exit;

if(is_uploaded_file($_FILES['image']['tmp_name'])) {
	$sourcePath = $_FILES['image']['tmp_name'];
	$targetPath = "img/uploads/".$_FILES['image']['name'];
	
	}

	if(move_uploaded_file($sourcePath,$targetPath)) {
		$result = $db_handle->runQuery("UPDATE `gallery` SET  `heading`='".$name."',`subheading`='".$sub."' ,`image`='".$targetPath."' where id='".$id."'");
		echo '<script>alert(" Updated Successfully ");
		window.location.href="portfolio.php"; </script>';
	}


	
else{
$result1 = $db_handle->runQuery("UPDATE `gallery` SET  `heading`='".$name."',`subheading`='".$sub."' where id='".$id."'");
//echo "UPDATE `comment` SET  `name`='".$name."',`email`='".$email."',`subject`='".$subject."',`comment`='".$message."' where id='".$id."'";
//echo "UPDATE `contact` SET  `location`='".$name."',`email`='".$email."',`phone_number`='".$subject."' where id='".$id."'";
echo '<script>alert(" Updated Successfully ");
window.location.href="portfolio.php"; </script>';

}	
	//  echo "INSERT INTO `home` (`id`,`name`,`link`)values(NULL,'".$name."','".$link."')";
	// exit;


// else{
//     $result1 = $db_handle->runQuery("UPDATE `home` SET  `heading`='".$name."',`subheading`='".$subheading."',`description`='".$email."' where id='".$id."'");
//     echo '<script>alert(" Updated Successfully ");
// window.location.href="mothertable.php"; </script>';

	?>