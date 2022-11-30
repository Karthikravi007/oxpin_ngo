<?php

error_reporting(0);
if(isset($_POST['upload'])){	

    //Db File
	include("db.php");
    // error_reporting(0);
	$heading=$_POST['heading'];
	$date=$_POST['date'];
    // Count # of uploaded files in array
    $total = count($_FILES['images']['name']);

    // Loop through each file
    for( $i=0 ; $i < $total ; $i++ )
   {

      //Get the temp file path
      $tmpFilePath = $_FILES['images']['tmp_name'][$i];

      //Make sure we have a file path
      if ($tmpFilePath != ""){
        //Setup our new file path
        $newFilePath = "img/uploads/" . $_FILES['images']['name'][$i];


        //Upload the file into the temp dir
        if(move_uploaded_file($tmpFilePath, $newFilePath)) {
//echo "INSERT INTO `portfolio` (`id`,`image`,`heading`,`subheading`)values(".$newFilePath."','".$heading."','".$subheading."')";
//exit;
            //echo "INSERT INTO `gallery` (`id`,`images`)values(NULL,'".$newFilePath."')";
            $result = $db_handle->runQuery("INSERT INTO `event` (`id`,`heading`,`date`,`image`)values(NULL,'".$heading."','".$date."','".$newFilePath."')");
            echo '<script>alert(" Inserted Successfully ");
            window.location.href="event.php"; </script>';


        }
      }
    }        

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
