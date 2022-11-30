<?php
if(isset($_POST['upload'])){	  
    //Db File
	include("db.php");
     error_reporting(0);
	$heading=$_POST['heading'];
	$subheading=$_POST['subheading'];
	$description=$_POST['description'];
    if(is_uploaded_file($_FILES['image']['tmp_name'])) {
      $sourcePath = $_FILES['image']['tmp_name'];
      $targetPath = "./img/uploads/".$_FILES['image']['name'];
      $filename = $_FILES['image']['name'];
    }
      
      if(move_uploaded_file($sourcePath,$targetPath)){


        $result = $db_handle->runQuery("INSERT INTO `testimonial` (`id`,`image`,`heading`,`subheading`,`description`)values(NULL,'".$targetPath."','".$heading."','".$subheading."','".$description."')");
        echo '<script>alert(" Inserted Successfully ");
        window.location.href="testimonial.php"; </script>';
      }
      else{
        $result1 = $db_handle->runQuery("INSERT INTO `testimonial` (`id`,`heading`,`subheading`,`description`)values(NULL,'".$heading."','".$subheading."','".$description."')");
        echo '<script>alert(" Inserted Successfully ");
        window.location.href="testimonial.php"; </script>';
      }

}

?>
