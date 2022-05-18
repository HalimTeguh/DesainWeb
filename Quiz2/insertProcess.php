<?php
    include "myconnection.php";

    $id = $_GET["id_buku"];
    $judul = $_GET["judul"];
    $pengarang = $_GET["pengarang"];
    $penerbit = $_GET["penerbit"];
    $deskripsi = $_GET["deskripsi"];

    $query = "INSERT INTO buku(id_buku, judul, pengarang, penerbit, deskripsi)
            VALUE('$id','$judul', '$pengarang', '$penerbit', '$deskripsi')";

    if(mysqli_query($connect, $query)){
        header('Location:homeadmin.php');
    }else{
        echo "Buku gagal ditambahkan <br>". mysqli_error($connect);
    }

    mysqli_close($connect);
?>