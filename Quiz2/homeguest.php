<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="styleHomeadmin.css" />
</head>

<body>
    <div class="header">
        <table>
            <th>
            <td>
                <h1>TOKO BUKU URELLY</h1>
            </td>
            <td>
                <a href="">
                    <h3>HOME</h3>
                </a>
            </td>
            <td>
                <a href="login.php">
                    <h3>LOGIN</h3>
                </a>
            </td>
            </th>
        </table>
    </div>
    <div class="isiatas">
    <h3>
        SELAMAT DATANG
    </h3>
        <table>
            <tr>
                <td>
                    <form action="search.php" method="get">
                        Cari data mahasiswa berdasarkan Judul:
                        <input type="text" name="carijudul">
                        <input type="submit" value="cari">
                    </form>
                </td>
            </tr>
        </table>
    </div>


    <div class="isi">
        <div class="containerheadertable">
            <table class="headertable">
                <tr>
                    <th> ID Buku </th>
                    <th> Judul Buku </th>
                    <th> Pengarang </th>
                    <th> Aksi </th>
                </tr>
            </table>
        </div>
        <table class="isitable">
            <?php
            include "myconnection.php";

            $query = "SELECT * FROM buku";
            $result = mysqli_query($connect, $query);
            
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
                    <tr>
                        <td> <?php echo $row["id_buku"]; ?> </td>
                        <td> <?php echo $row["judul"]; ?> </td>
                        <td> <?php echo $row["pengarang"]; ?> </td>
                        <td>
                            <a href="detailbuku.php?id_buku=<?php echo $row["id_buku"]; ?>">
                                <button class="detail">Detail</button></a>
                        </td>
                    </tr>
            <?php
                }
            } else {
                echo "0 result";
            }
            ?>
        </table>
    </div>

    <div class="footer">
        <p>© 2022 Urelly Login Form. All rights reserved</p>
    </div>
</body>

</html>