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
            <img class="img1" src="img/Cash.png" align="middle">

            <div class="content">
                <h2>Beli Go-Rengan</h2>

                <?php
                if (isset($_GET['nama']) and isset($_GET['jumlah'])) {
                    $nama = $_GET['nama'];
                    $status = $_GET['status'];
                    $menu = $_GET['menu'];
                    $jumlah = $_GET['jumlah'];
                    $isi_form = "$nama=$nama$status=$status$menu=$menu$jumlah=$jumlah";
                } else {
                    header("Location:Transaksi.php?error=variabel_belum_diset");
                }

                if (empty($nama)) {
                    header("Location:Transaksi.php?error=nama_kosong" . $isi_form);
                } else if (!preg_match("/^[a-zA-Z ]*$/", $nama)) {
                    header("Location:Transaksi.php?error=nama_invalid" . $isi_form);
                } else if (empty($jumlah)) {
                    header("Location:Transaksi.php?error=jumlah_kosong" . $isi_form);
                } else {
                    $paket1 = 20000;
                    $paket2 = 30000;
                    $paket3 = 50000;
                    if ($status == 'Member') {
                        if ($jumlah > 3) {
                            if ($menu == "Paket 1") {
                                $jumHarga=$paket1*$jumlah;
                                $diskon = ($paket1 * 10 / 100) * $jumlah;
                                $totalHarga = ($paket1 * $jumlah) - $diskon;
                            } else if ($menu == "Paket 2") {
                                $jumHarga=$paket2*$jumlah;
                                $diskon = ($paket2 * 10 / 100) * $jumlah;
                                $totalHarga = ($paket2 * $jumlah) - $diskon;
                            } else {
                                $jumHarga=$paket3*$jumlah;
                                $diskon = ($paket3 * 10 / 100) * $jumlah;
                                $totalHarga = ($paket3 * $jumlah) - $diskon;
                            }
                        } else if ($jumlah > 1) {
                            if ($menu == "Paket 1") {
                                $jumHarga=$paket1*$jumlah;
                                $diskon = ($paket1 * 7 / 100) * $jumlah;
                                $totalHarga = ($paket1 * $jumlah) - $diskon;
                            } else if ($menu == "Paket 2") {
                                $jumHarga=$paket2*$jumlah;
                                $diskon = ($paket2 * 7 / 100) * $jumlah;
                                $totalHarga = ($paket2 * $jumlah) - $diskon;
                            } else {
                                $jumHarga=$paket3*$jumlah;
                                $diskon = ($paket3 * 7 / 100) * $jumlah;
                                $totalHarga = ($paket3 * $jumlah) - $diskon;
                            }
                        } else if ($jumlah == 1) {
                            if ($menu == "Paket 1") {
                                $jumHarga=$paket1*$jumlah;
                                $diskon = ($paket1 * 5 / 100) * $jumlah;
                                $totalHarga = ($paket1 * $jumlah) - $diskon;
                            } else if ($menu == "Paket 2") {
                                $jumHarga=$paket2*$jumlah;
                                $diskon = ($paket2 * 5 / 100) * $jumlah;
                                $totalHarga = ($paket2 * $jumlah) - $diskon;
                            } else {
                                $jumHarga=$paket3*$jumlah;
                                $diskon = ($paket3 * 5 / 100) * $jumlah;
                                $totalHarga = ($paket3 * $jumlah) - $diskon;
                            }
                        }
                    } else if($status == "Non Member"){
                        if ($jumlah > 10) {
                            if ($menu == "Paket 1") {
                                $jumHarga=$paket1*$jumlah;
                                $diskon = ($paket1 * $jumlah) * 7 / 100;
                                $totalHarga = ($paket1 * $jumlah) - $diskon;
                            } else if ($menu == "Paket 2") {
                                $jumHarga=$paket2*$jumlah;
                                $diskon = ($paket2 * $jumlah) * 7 / 100;
                                $totalHarga = ($paket2 * $jumlah) - $diskon;
                            } else {
                                $jumHarga=$paket3*$jumlah;
                                $diskon = ($paket3 * $jumlah) * 7 / 100;
                                $totalHarga = ($paket3 * $jumlah) - $diskon;
                            }
                        } else if ($jumlah > 5) {
                            if ($menu == "Paket 1") {
                                $jumHarga=$paket1*$jumlah;
                                $diskon = ($paket1 * $jumlah) * 5 / 100;
                                $totalHarga = ($paket1 * $jumlah) - $diskon;
                            } else if ($menu == "Paket 2") {
                                $jumHarga=$paket2*$jumlah;
                                $diskon = ($paket2 * $jumlah) * 5 / 100;
                                $totalHarga = ($paket2 * $jumlah) - $diskon;
                            } else {
                                $jumHarga=$paket3*$jumlah;
                                $diskon = ($paket3 * $jumlah) * 5 / 100;
                                $totalHarga = ($paket3 * $jumlah) - $diskon;
                            }
                        } else if ($jumlah >= 1) {
                            if ($menu == "Paket 1") {
                                $jumHarga=$paket1*$jumlah;
                                $diskon = 0;
                                $totalHarga = $jumHarga;
                            } else if ($menu == "Paket 2") {
                                $jumHarga=$paket2*$jumlah;
                                $diskon = 0;
                                $totalHarga = $jumHarga;
                            } else {
                                $jumHarga=$paket3*$jumlah;
                                $diskon = 0;
                                $totalHarga = $jumHarga;
                            }
                        }
                    }
                }
                ?>
                <table class="content">
                    <tr >
                        <td width='225px'><?php echo "Nama Pembeli" ?></td>
                        <td><?php echo ": $nama" ?></td>
                    </tr>
                    <tr>
                        <td><?php echo "Status Pembeli" ?></td>
                        <td><?php echo ": $status" ?></td>
                    </tr>
                    <tr>
                        <td><?php echo "Total Harga" ?></td>
                        <td><?php echo ": $jumHarga" ?></td>
                    </tr>
                    <tr>
                        <td><?php echo "Diskon" ?></td>
                        <td><?php echo ": $diskon" ?></td>
                    </tr>
                </table>

                <h3><?php echo "Yang harus dibayarkan adalah $totalHarga" ?></h3>
            </div><br>

                <table class="footer">
                    <tr>
                        <td><b>copyright &copy; Go-Rengan 2022</b></td>
                    </tr>
                </table>
</body>

</html>