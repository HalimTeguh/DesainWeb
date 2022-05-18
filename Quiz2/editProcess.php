<?php
    include "myconnection.php";

    $id = $_GET["id_buku"];
    $judul = $_GET["judul"];
    $pengarang = $_GET["pengarang"];
    $penerbit = $_GET["penerbit"];
    $deskripsi = $_GET["deskripsi"];

    $query = "UPDATE buku SET judul='$judul', pengarang='$pengarang', penerbit='$penerbit', deskripsi='$deskripsi' WHERE id_buku='$id'";

    if(mysqli_query($connect, $query)){
        header('Location:homeadmin.php');
    }else{
        echo "Gagal mengubah data buku <br>". mysqli_error($connect);
    }

    mysqli_close($connect);
?>