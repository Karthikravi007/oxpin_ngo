<?php
include("db.php");
 error_reporting(0);

$id= $_REQUEST["update_id"];
$link= addslashes($_REQUEST["link"]);

 {

		$result = $db_handle->runQuery("UPDATE `social_media` SET `social_link`='".$link."' where id='".$id."'");
		echo '<script>alert(" Updated Successfully ");
		window.location.href="social.php"; </script>';
	}

 


	?>