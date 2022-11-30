<?php
include("db.php");
 error_reporting(0);

$id= $_REQUEST["update_id"];
$name= addslashes($_REQUEST["edit_heading"]);
$count= addslashes($_REQUEST["edit_count"]);

 {

		$result = $db_handle->runQuery("UPDATE `count` SET  `heading`='".$name."',`count`='".$count."' where id='".$id."'");
		echo '<script>alert(" Updated Successfully ");
		window.location.href="count.php"; </script>';
	}

 


	?>