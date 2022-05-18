<!DOCTYPE html>
<html>

<head>
    <title>SEARCHING BUKU</title>
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
                    <h3>SEARCH</h3>
                </a>
            </td>
            <td>
                <?php
                session_start();
                if (isset($_SESSION["username"])) {
                ?>
                    <a href="logout.php">
                        <h3>LOGOUT</h3>
                    </a>
                <?php
                } else {
                ?>
                    <a href="login.php">
                        <h3>LOGIN</h3>
                    </a>
                <?php
                }
                ?>
            </td>
            </th>
        </table>
    </div>

    <div class="isiatas">
        <h3>
            Hasil Pencarian
        </h3>
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
            $nama = $_GET["carijudul"];
            include "myconnection.php";

            $query = "SELECT * FROM buku WHERE judul LIKE '%$nama%'";
            $result = mysqli_query($connect, $query);

            if (isset($_SESSION["username"])) {
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
                                <a href="editdata.php?id_buku=<?php echo $row["id_buku"]; ?>">
                                    <button class="edit">Edit</button></a>
                                <a href="delete.php?id_buku=<?php echo $row["id_buku"]; ?>">
                                    <button class="hapus">Hapus</button></a>
                            </td>
                        </tr>
                    <?php
                    }
                } else {
                    ?>
                    <tr>
                        <td><b>result 0</b></td>
                    </tr>
                    <tr>
                        <td>
                            <?php
                            if (isset($_SESSION["username"])) {
                            ?>
                                <a href="homeadmin.php"><button class="hapus">Back</button></a>
                            <?php
                            } else {
                            ?>
                                <a href="homeguest.php"><button class="hapus">Back</button></a>
                            <?php
                            }
                            ?>
                        </td>
                    </tr>
                    <?php
                }
            } else {
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
                    ?>
                    <tr>
                        <td><b>result 0</b></td>
                    </tr>
                    <tr>
                        <td>
                            <?php
                            if (isset($_SESSION["username"])) {
                            ?>
                                <a href="homeadmin.php"><button class="hapus">Back</button></a>
                            <?php
                            } else {
                            ?>
                                <a href="homeguest.php"><button class="hapus">Back</button></a>
                            <?php
                            }
                            ?>
                        </td>
                    </tr>
            <?php
                }
            }
            ?>
        </table>
    </div>

    <div class="footer">
        <p>© 2022 Urelly Login Form. All rights reserved</p>
    </div>
</body>

</html>