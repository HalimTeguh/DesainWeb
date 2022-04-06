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
            <img class="img1" src="img/payment.png" align="middle">

            <div class="content">
                <h2>Beli Go-Rengan</h2>

                <?php
                //ambil nilai variabel error
                if (isset($_GET['error'])) {
                    $error = $_GET['error'];
                } else {
                    $error = "";
                }

                //siapkan pesan kesalahan
                $pesan = "";
                if ($error == "variabel_belum_diset") {
                    $pesan = "Anda harus mengakses halaman ini dari form_3.php";
                } else if ($error == "nama_kosong") {
                    $pesan = "Nama harus diisi";
                } else if ($error == "nama_invalid") {
                    $pesan = "Nama diisi huruf dan spasi";
                } else if ($error == "email_kosong") {
                    $pesan = "Email harus diisi";
                } else if ($error == "email_invalid") {
                    $pesan = "Email tidak sesuai";
                }

                //Siapkan isian form jika terjadi kesalahan
                if (isset($_GET['nama']) and isset($_GET['status']) and isset($_GET['email']) and isset($_GET['jumlah'])) {
                    $nama = $_GET['nama'];
                    $status = $_GET['status'];
                    $email = $_GET['email'];
                    $jumlah = $_GET['jumlah'];
                } else {
                    $nama = "";
                    $status = "";
                    $email = "";
                    $jumlah = "";
                }
                ?>

                <span class="error"><?php echo $pesan; ?></span>
                <div>
                    <table class=content>
                        <form method="get" action="prosesForm.php">
                            <tr>
                                <td>Nama Pembeli: </td>
                                <td><input type="text" name="nama" value="<?php echo $nama ?>"></td>
                            </tr>
                            <tr>
                                <td>Status Pembeli: </td>
                                <td>
                                    <select name="status">
                                        <option value="Member">Member</option>
                                        <option value="Non Member" selected>Non Member</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Menu: </td>
                                <td>
                                    <select name="menu">
                                        <option value="Paket 1" selected>Paket 1</option>
                                        <option value="Paket 2">Paket 2</option>
                                        <option value="Paket 3">Paket 3</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Jumlah: </td>
                                <td><input type="number" name="jumlah" value="<?php echo $jumlah ?>"></td>
                            </tr>
                            <tr>
                                <td><input type="submit" name="kirim" value="kirim"> </td>
                            </tr>
                        </form>
                    </table>

                </div>
                <br>
                </div>
                <table class="footer">
                    <tr>
                        <td><b>copyright &copy; Go-Rengan 2022</b></td>
                    </tr>
                </table>
            
</body>

</html>