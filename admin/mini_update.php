<?php
include("db.php");
 error_reporting(0);

$id= $_POST["update_id"];
$exprience=$_POST['exprience'];
$heading=$_POST['heading'];
$description=$_POST['description'];
$subheading1=$_POST['subheading1'];
$description1=$_POST['description1'];
$subheading2=$_POST['subheading2'];
$description2=$_POST['description2'];
if(is_uploaded_file($_FILES['image']['tmp_name'])) {
	$sourcePath = $_FILES['image']['tmp_name'];
	$targetPath = "img/uploads/".$_FILES['image']['name'];
	
	}

	if(move_uploaded_file($sourcePath,$targetPath)) {

		$result = $db_handle->runQuery("UPDATE `mini_about` SET  `exprience`='".$exprience."',`heading`='".$heading."',`description`='".$description."',`subheading1`='".$subheading1."',`description1`='".$description1."',`subheading2`='".$subheading2."',`description2`='".$description2."',`image`='".$targetPath."' where id='".$id."'");
		echo '<script>alert(" Updated Successfully ");
		window.location.href="about_mini.php"; </script>';
	}


	
else{
    // echo "UPDATE `mini_about` SET  `exprience`='".$exprience."',`heading`='".$heading."',`description`='".$description."',`subheading1`='".$subheading1."',`description1`='".$description1."',`subheading2`='".$subheading2."',`description2`='".$description2."' where id='".$id."'";exit;
$result1 = $db_handle->runQuery("UPDATE `mini_about` SET  `exprience`='".$exprience."',`heading`='".$heading."',`description`='".$description."',`subheading1`='".$subheading1."',`description1`='".$description1."',`subheading2`='".$subheading2."',`description2`='".$description2."' where id='".$id."'");
echo '<script>alert(" Updated Successfully ");
window.location.href="about_mini.php"; </script>';

}	

	?>