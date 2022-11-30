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


        $result = $db_handle->runQuery("INSERT INTO `slider` (`id`,`image`,`heading`,`subheading`)values(NULL,'".$targetPath."','".$heading."','".$subheading."')");
        echo '<script>alert(" Inserted Successfully ");
        window.location.href="home.php"; </script>';
      }
      else{
        $result1 = $db_handle->runQuery("INSERT INTO `slider` (`id`,`heading`,`subheading`)values(NULL,'".$heading."','".$subheading."')");
        echo '<script>alert(" Inserted Successfully ");
        window.location.href="home.php"; </script>';
      }









	
	//error_reporting(0);

    // Count # of uploaded files in array
   /* $total = count($_FILES['image']['name']);

    // Loop through each file
    for( $i=0 ; $i < $total ; $i++ ) {

      //Get the temp file path
      $tmpFilePath = $_FILES['image']['tmp_name'][$i];

      //Make sure we have a file path
      if ($tmpFilePath != ""){
        //Setup our new file path
        $newFilePath = "./img/" . $_FILES['image']['name'][$i];


        //Upload the file into the temp dir
        if(move_uploaded_file($tmpFilePath, $newFilePath)) {

            //echo "INSERT INTO `gallery` (`id`,`images`)values(NULL,'".$newFilePath."')";
           


        }
        $result = $db_handle->runQuery("INSERT INTO `aboutcontent` (`id`,`image`,`heading`,`subheading`,`description`)values(NULL,'".$newFilePath."','".$heading."','".$subheading."','".$description."')");
        echo '<script>alert(" Inserted Successfully ");
        window.location.href="aboutcontent.php"; </script>';
      }
    }  */      

	/*if(is_uploaded_file($_FILES['images']['tmp_name']))
     {
	    
	   // $sourcePath = $_FILES['images']['tmp_name'];
	  //$targetPath = "assets/images/".$_FILES['images']['name']."";

    
    	//if(move_uploaded_file($sourcePath,$targetPath))
        {
    
    		//$img_id=$_POST['img_id'];
    
    		//$result = $db_handle->runQuery("INSERT INTO `gallery` (`id`,`images`)values(NULL,'".$targetPath."')");
    		//echo '<script>alert(" Inserted Successfully ");
    		//window.location.href="gallerytable.php"; </script>';
    
    		//echo "INSERT INTO `gallery` (`id`,`image`)values(NULL,'".$targetPath."')";
    
    		//$result1 = $db_handle->runQuery("INSERT INTO `home_images` (`id`,`img_id`,`image`)values(NULL,'".$img_id."','".$filename."')");
    
    		//echo "INSERT INTO `install_service` (`id`,`image`)values(NULL,'".$filename."')";
    
    	}
    }*/
}

?>
