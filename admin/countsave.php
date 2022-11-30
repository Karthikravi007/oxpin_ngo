<?php


if(isset($_POST['upload'])){	
    
    //Db File
	include("db.php");
     error_reporting(0);
	$heading=$_POST['heading'];
	
    $description=$_POST['c'];

		
	//error_reporting(0);
//echo "INSERT INTO `count` (`id`,`heading`,`count`)values(NULL,'".$heading."','".$description."')";
//exit;
   
            //echo "INSERT INTO `gallery` (`id`,`images`)values(NULL,'".$newFilePath."')";
            $result = $db_handle->runQuery("INSERT INTO `count` (`id`,`heading`,`count`)values(NULL,'".$heading."','".$description."')");
            echo '<script>alert(" Inserted Successfully ");
            window.location.href="count.php"; </script>';


       
}

?>
