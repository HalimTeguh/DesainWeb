<!DOCTYPE html>
<html>

<head>
    <title>Beli Go-Rengan</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>
    <div class="container">
        <div class="box">
            <table class="header">
                <tr>
                    <td>
                        <h1>Go-Rengan</h1>
                    </td>
                    <td>
                        <table class="menu">
                            <tr>
                                <td class="menumenu"><a class="Link" href="http://localhost/DesainWeb/UTS/indeks.html">Home</a></td>
                                <td class="menumenu"><a class="Link1" href="http://localhost/DesainWeb/UTS/Transaksi.php">Transaksi</a></td>
                                <td class="menumenu"><a class="Link" href="http://localhost/DesainWeb/UTS/tambahFoto.html">Tambah Foto</a></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <img class="img1" src="img/Finish.png" align="middle">

            <div class="content">
                <h2>Tambah Foto</h2>
                <table class="content">
                    <tr>
                        <td align="center">
                            <?php
                            $target_path = "Foto/";

                            $target_path = $target_path . basename($_FILES['uploadfile']['name']);
                            if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], $target_path)) {
                                echo "Upload file " . basename($_FILES['uploadfile']['name'] . " telah berhasil");
                            } else {
                                echo "Terjadi Kesalahan saat Mengupload, Silahkan Coba Lagi!";
                            }
                            ?>
                        </td>
                    </tr>
                </table>

            </div><br>

            <table class="footer">
                <tr>
                    <td><b>copyright &copy; Go-Rengan 2022</b></td>
                </tr>
            </table>
</body>

</html>