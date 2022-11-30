<?php
include("db.php");
 error_reporting(0);

$id= $_REQUEST["update_id"];
$menu= addslashes($_REQUEST["menu"]);
$link= addslashes($_REQUEST["link"]);

 {

		$result = $db_handle->runQuery("UPDATE `menu` SET  `menu`='".$menu."',`link`='".$link."' where id='".$id."'");
		echo '<script>alert(" Updated Successfully ");
		window.location.href="menu.php"; </script>';
	}

 


	?>