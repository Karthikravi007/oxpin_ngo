<?php
include("db.php");
 error_reporting(0);

$id= $_REQUEST["update_id"];
$name= addslashes($_REQUEST["edit_heading"]);
$sub= addslashes($_REQUEST["edit_subheading"]);

 {

		$result = $db_handle->runQuery("UPDATE `homeheading` SET  `heading`='".$name."',`subheading`='".$sub."' where id='".$id."'");
		echo '<script>alert(" Updated Successfully ");
		window.location.href="homeheading.php"; </script>';
	}

 


	?>