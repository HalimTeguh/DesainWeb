<?php
    include "myconnection.php";

    $id = $_GET['id_buku'];

    $query = "DELETE FROM buku WHERE id_buku='$id'";

    if(mysqli_query($connect, $query)){
        header('Location:homeadmin.php');
    }else{
        echo "Data buku gagal dihapus <br>"; 
        mysqli_error($connect);
    }

    mysqli_close($connect);
?>