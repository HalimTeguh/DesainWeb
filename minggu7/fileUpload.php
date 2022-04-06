<?php
    $target_path = "Foto/";

    $target_path = $target_path . basename($_FILES['uploadfile']['name']);

    if(move_uploaded_file($_FILES['uploadfile']['tmp_name'],$target_path)){
        echo "the file " . basename($_FILES['uploadfile']['name']." has been uploaded");
    }else{
        echo "There was an error uploading the file, please try again!";
    }
?>