<?php
if(isset($_POST['upload'])){	  
    //Db File
	include("db.php");
     error_reporting(0);
	$heading=$_POST['heading'];
	$subheading=$_POST['subheading'];
    if(is_uploaded_file($_FILES['image']['tmp_name'])) {
      $sourcePath = $_FILES['image']['tmp_name'];
      $targetPath = "./img/uploads/".$_FILES['image']['name'];
      $filename = $_FILES['image']['name'];
    }
      
      if(move_uploaded_file($sourcePath,$targetPath)){


        $result = $db_handle->runQuery("INSERT INTO `content` (`id`,`image`,`heading`,`subheading`)values(NULL,'".$targetPath."','".$heading."','".$subheading."')");
        echo '<script>alert(" Inserted Successfully ");
        window.location.href="content.php"; </script>';
      }
      else{
        $result1 = $db_handle->runQuery("INSERT INTO `content` (`id`,`heading`,`subheading`)values(NULL,'".$heading."','".$subheading."')");
        echo '<script>alert(" Inserted Successfully ");
        window.location.href="content.php"; </script>';
      }

}

?>
