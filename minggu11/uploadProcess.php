<?php
    include "myconnection.php";

    $target_path = "img/";
    $target_path = $target_path . basename($_FILES['tambah']['name']);
    if(move_uploaded_file($_FILES['tambah']['tmp_name'],$target_path)){
        header("Location:homeCRUD.php");
    }else{
        echo "There was an error uploading the file, please try again!";
    }

    $id = $_POST["myid"];
    $name = $_POST["myname"];
    $address = $_POST["myaddress"];
    $foto = $target_path;

    $query = "UPDATE student SET name='$name', address='$address', foto='$foto' WHERE id=$id";

    if(mysqli_query($connect, $query)){
        echo "berhasil";
    }else{
        echo "Gagal mengubah data <br>". mysqli_error($connect);
    }
    mysqli_close($connect);
?>