<?php
include("db.php");
 error_reporting(0);

$id= $_REQUEST["update_id"];
$heading= addslashes($_REQUEST["heading"]);
$sub= addslashes($_REQUEST["subheading"]);
$des= addslashes($_REQUEST["description"]);
if(is_uploaded_file($_FILES['b_image']['tmp_name'])) {
	$sourcePath = $_FILES['b_image']['tmp_name'];
	$targetPath = "img/uploads/".$_FILES['b_image']['name'];
    move_uploaded_file($sourcePath,$targetPath);
    $result1 = $db_handle->runQuery("UPDATE `about` SET  `b_image`='".$targetPath."' where id='".$id."'");
	}
if(is_uploaded_file($_FILES['t_image']['tmp_name'])) {
        $sourcePath1 = $_FILES['t_image']['tmp_name'];
        $targetPath1 = "img/uploads/".$_FILES['t_image']['name'];
        move_uploaded_file($sourcePath1,$targetPath1);
        $result1 = $db_handle->runQuery("UPDATE `about` SET  `t_image`='".$targetPath1."' where id='".$id."'");
        
    }
    {

		$result = $db_handle->runQuery("UPDATE `about` SET  `heading`='".$heading."',`subheading`='".$sub."' ,`description`='".$des."' where id='".$id."'");
		echo '<script>alert(" Updated Successfully ");
		window.location.href="about.php"; </script>';
	}

	//  echo "INSERT INTO `home` (`id`,`name`,`link`)values(NULL,'".$name."','".$link."')";
	// exit;


// else{
//     $result1 = $db_handle->runQuery("UPDATE `home` SET  `heading`='".$name."',`subheading`='".$subheading."',`description`='".$email."' where id='".$id."'");
//     echo '<script>alert(" Updated Successfully ");
// window.location.href="mothertable.php"; </script>';

	?>