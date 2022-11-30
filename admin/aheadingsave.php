<?php


if(isset($_POST['upload'])){	
    
    //Db File
	include("db.php");
     error_reporting(0);
	$heading=addslashes($_POST['heading']);
	$subheading=addslashes($_POST['subheading']);


	
	{

            //echo "INSERT INTO `gallery` (`id`,`images`)values(NULL,'".$newFilePath."')";
            $result = $db_handle->runQuery("INSERT INTO `aboutheading` (`id`,`heading`,`subheading`)values(NULL,'".$heading."','".$subheading."')");
            echo '<script>alert(" Inserted Successfully ");
            window.location.href="aboutheading.php"; </script>';


        }
             


}

?>
