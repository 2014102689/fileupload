<?php

    include('../utilities/validation.php');

    //echo (checkType($type)) ? "Valid" : "Invalid" ;
    //echo (checkSize($size)) ? "Valid" : "Invalid" ;


    $countfiles = count($_FILES['fileToUpload']['name']);

    //Looping all files
    for($i=0;$i<$countfiles;$i++){
        
        $size = $_FILES['fileToUpload']['size'][$i];
        $type = $_FILES['fileToUpload']['type'][$i];
        $filename = $_FILES['fileToUpload']['name'][$i];
        $filetemp = $_FILES['fileToUpload']['tmp_name'][$i];
        

        if(checkType($type) && checkfileSize($size)){
            if(upload($filename,$filetemp)==true){
                echo "Sucessfully Uploaded! <br>";
                echo "<img src='../uploads/".$filename."'>";
            }else{
                echo "Failed to Upload";
            }
        }else{
                echo "Failed to Upload";
        }
    }



?>

