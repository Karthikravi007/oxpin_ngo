<?php


if(isset($_POST['upload'])){	
    
    //Db File
	include("db.php");
     error_reporting(0);

    // Count # of uploaded files in array
    $total = count($_FILES['image']['name']);

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
            $result = $db_handle->runQuery("INSERT INTO `logo` (`id`,`image`)values(NULL,'".$newFilePath."')");
            echo '<script>alert(" Inserted Successfully ");
            window.location.href="logo.php"; </script>';


        }
     
}
    }
}
?>
