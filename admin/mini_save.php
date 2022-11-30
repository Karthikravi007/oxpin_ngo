<?php


if(isset($_POST['upload'])){	
    
    //Db File
	include("db.php");
     error_reporting(0);
     $exprience=$_POST['exprience'];
	$heading=$_POST['heading'];
    $description=$_POST['description'];
    $subheading1=$_POST['subheading1'];
    $description1=$_POST['description1'];
    $subheading2=$_POST['subheading2'];
    $description2=$_POST['description2'];
    if(is_uploaded_file($_FILES['image']['tmp_name'])) {
      $sourcePath = $_FILES['image']['tmp_name'];
      $targetPath = "./img/uploads/".$_FILES['image']['name'];
      $filename = $_FILES['image']['name'];
    }
      
      if(move_uploaded_file($sourcePath,$targetPath)){

        $result = $db_handle->runQuery("INSERT INTO `mini_about` (`id`,`exprience`,`heading`,`description`,`subheading1`,`description1`,`subheading2`,`description2`,`image`)values(NULL,'".$exprience."','".$heading."','".$description."','".$subheading1."','".$description1."','".$subheading2."','".$description2."','".$targetPath."')");
        echo '<script>alert(" Inserted Successfully ");
        window.location.href="about_mini.php"; </script>';
      }
      else{
        $result1 = $db_handle->runQuery("INSERT INTO `mini_about` (`id`,`exprience`,`heading`,`description`,`subheading1`,`description1`,`subheading2`,`description2`)values(NULL,'".$exprience."','".$heading."','".$description."','".$subheading1."','".$description1."','".$subheading2."','".$description2."')");
        echo '<script>alert(" Inserted Successfully ");
        window.location.href="about_mini.php"; </script>';
      }

}

?>
