<?php


if(isset($_POST['upload'])){	
    
    //Db File
	include("db.php");
     error_reporting(0);
	$heading=addslashes($_POST['heading']);
	$description=addslashes($_POST['description']);

	
	//error_reporting(0);

    // Count # of uploaded files in array
    /*$total = count($_FILES['image']['name']);

    // Loop through each file
    for( $i=0 ; $i < $total ; $i++ ) {

      //Get the temp file path
      $tmpFilePath = $_FILES['image']['tmp_name'][$i];

      //Make sure we have a file path
      if ($tmpFilePath != ""){
        //Setup our new file path
        $newFilePath = "img/uploads/" . $_FILES['image']['name'][$i];


        //Upload the file into the temp dir
        if(move_uploaded_file($tmpFilePath, $newFilePath)) {

            //echo "INSERT INTO `gallery` (`id`,`images`)values(NULL,'".$newFilePath."')";
            $result = $db_handle->runQuery("INSERT INTO `other-service` (`id`,`image`,`heading`)values(NULL,'".$newFilePath."','".$heading."')");
            echo '<script>alert(" Inserted Successfully ");
            window.location.href="otherservice.php"; </script>';


        }
      }
    }*/      
 $result = $db_handle->runQuery("INSERT INTO `other-service` (`id`,`description`,`heading`)values(NULL,'".$description."','".$heading."')");
            echo '<script>alert(" Inserted Successfully ");
            window.location.href="otherservice.php"; </script>';

}

?>
