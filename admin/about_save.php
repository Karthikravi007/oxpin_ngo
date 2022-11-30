<?php


if(isset($_POST['upload'])){	
    
    //Db File
	include("db.php");
     error_reporting(0);
	$heading=$_POST['heading'];
	$subheading=$_POST['subheading'];
  $description=$_POST['description'];
    if(is_uploaded_file($_FILES['t_image']['tmp_name'])) {
      $sourcePath = $_FILES['t_image']['tmp_name'];
      $targetPath = "./img/uploads/".$_FILES['t_image']['name'];
      $filename = $_FILES['t_image']['name'];
      move_uploaded_file($sourcePath,$targetPath);
    }
    if(is_uploaded_file($_FILES['b_image']['tmp_name'])) {
        $sourcePath1 = $_FILES['b_image']['tmp_name'];
        $targetPath1 = "./img/uploads/".$_FILES['b_image']['name'];
        $filename = $_FILES['b_image']['name'];
        move_uploaded_file($sourcePath1,$targetPath1);
      }
      {
         // echo "INSERT INTO `about` (`id`,`heading`,`subheading`,`description`,`t_image`,`b_image`)values(NULL,'".$heading."','".$subheading."','".$description."','".$sourcePath."','".$sourcePath1."')";exit;
        $result = $db_handle->runQuery("INSERT INTO `about` (`id`,`heading`,`subheading`,`description`,`t_image`,`b_image`)values(NULL,'".$heading."','".$subheading."','".$description."','".$targetPath."','".$targetPath1."')");
        echo '<script>alert(" Inserted Successfully ");
        window.location.href="about.php"; </script>';
      }

}

?>
