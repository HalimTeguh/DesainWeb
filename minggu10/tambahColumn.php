<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "web_db";

    $connect = mysqli_connect($hostname, $username, $password, $database);

    if($connect){
        echo "Koneksi ke MySQL berhasil <br>";
    }else{
        echo "Koneksi ke MySQL gagal". mysqli_connect_error();
    }

    $query = "ALTER TABLE student ADD COLUMN foto VARCHAR(100);";

    if(mysqli_query($connect, $query)){
        echo "Column foto berhasil ditambahkan";
    }else{
        echo "Column foto gagal ditambahkan <br>". mysqli_error($connect);
    }
    mysqli_close($connect);
?>