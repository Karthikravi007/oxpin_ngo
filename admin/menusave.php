<?php


if(isset($_POST['upload'])){	
    
    //Db File
	include("db.php");
     error_reporting(0);
	$menu=$_POST['menu'];
	$link=$_POST['link'];
	//error_reporting(0);
//echo "INSERT INTO `count` (`id`,`heading`,`count`)values(NULL,'".$heading."','".$description."')";
//exit;
   
            //echo "INSERT INTO `gallery` (`id`,`images`)values(NULL,'".$newFilePath."')";
            $result = $db_handle->runQuery("INSERT INTO `menu` (`id`,`menu`,`link`)values(NULL,'".$menu."','".$link."')");
            echo '<script>alert(" Inserted Successfully ");
            window.location.href="menu.php"; </script>';


       
}

?>
