<!DOCTYPE html>
<html>
    <head>
        <style>
            .error {color: #FF0000};
        </style>
    </head>
    <body>
        <?php
            //ambil nilai variabel error
            if(isset($_GET['error'])){
                $error=$_GET['error'];
            }else{
                $error="";
            }
            
            //siapkan pesan kesalahan
            $pesan="";
            if($error=="variabel_belum_diset"){
                $pesan="Anda harus mengakses halaman ini dari form2.php";
            }else if($error=="nama_kosong"){
                $pesan="Nama harus diisi";
            }else if($error=="email_kosong"){
                $pesan="Email harus diisi";
            }

            //Siapkan isian form jika terjadi kesalahan
            if(isset($_GET['nama']) AND isset($_GET['email']) AND isset($_GET['komentar'])){
                $nama=$_GET['nama'];
                $email=$_GET['email'];
                $komentar=$_GET['komentar'];
            }else{
                $nama="";
                $email="";
                $komentar="";
            }
        ?>

        <span class="error"><?php echo $pesan; ?></span>

        <table>
            <form method="get" action="prosesForm_2.php">
                <tr>
                    <td width='100px'>Nama:</td>
                    <td width='500px'><input type="text" name="nama" value="<?php echo $nama?>"></td>
                </tr>
                <tr>
                    <td>Email: </td>
                    <td><input type="text" name="email" value="<?php echo $email?>"></td>
                </tr>
                <tr>
                    <td>Komentar: </td>
                    <td><textarea name="komentar" cols="40" rows="5"><?php echo $komentar ?>
                    </textarea> </td>
                </tr>
                <tr>
                    <td><input type="submit" name="kirim" value="kirim"> </td>
                </tr>
            </form>
        </table>
    </body>
</html>