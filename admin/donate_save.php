<?php
if(isset($_POST['upload'])){	  
    //Db File
	include("db.php");
     error_reporting(0);
	$heading=$_POST['heading'];
	$description=$_POST['description'];
	$goal=$_POST['goal'];
	$raised=$_POST['raised'];
    if(is_uploaded_file($_FILES['image']['tmp_name'])) {
      $sourcePath = $_FILES['image']['tmp_name'];
      $targetPath = "./img/uploads/".$_FILES['image']['name'];
      $filename = $_FILES['image']['name'];
    }
      
      if(move_uploaded_file($sourcePath,$targetPath)){

        // echo "INSERT INTO `donations` (`id`,`image`,`heading`,`description`,`goal`,`raised`)values(NULL,'".$targetPath."','".$heading."','".$subheading."','".$goal."','".$raised."')";exit;
        $result = $db_handle->runQuery("INSERT INTO `donations` (`id`,`image`,`heading`,`description`,`goal`,`raised`)values(NULL,'".$targetPath."','".$heading."','".$description."','".$goal."','".$raised."')");
        echo '<script>alert(" Inserted Successfully ");
        window.location.href="donate.php"; </script>';
      }
      else{
        $result1 = $db_handle->runQuery("INSERT INTO `donations` (`id`,`heading`,`description`,`goal`,`raised`)values(NULL,'".$heading."','".$description."','".$goal."','".$raised."')");
        echo '<script>alert(" Inserted Successfully ");
        window.location.href="donate.php"; </script>';
      }
}

?>
