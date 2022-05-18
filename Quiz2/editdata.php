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
                    <h3>EDIT</h3>
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
                }
                ?>
            </td>
            </th>
        </table>
    </div>

    <?php
    include "myconnection.php";

    $id = $_GET["id_buku"];

    $query = "SELECT * FROM buku WHERE id_buku='$id'";
    $result = mysqli_query($connect, $query);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
    ?>

            <div class="isi">
                <div class="containerheadertable">
                    <b>EDIT BUKU</b>
                </div>
                <form action="editProcess.php" method="get">
                    <table class="isitable">
                        <tr>
                            <td>ID BUKU</td>
                            <td> <input type="text" name="id_buku" value="<?php echo $row['id_buku']; ?>" readonly placeholder="ID Buku"> </td>
                        </tr>
                        <tr>
                            <td>JUDUL BUKU</td>
                            <td><input type="text" name="judul" value="<?php echo $row['judul']; ?>" placeholder="Judul Buku"></td>
                        </tr>
                        <tr>
                            <td>PENGARANG</td>
                            <td><input type="text" name="pengarang" value="<?php echo $row['pengarang']; ?>" placeholder="Pengarang Buku"></td>
                        </tr>
                        <tr>
                            <td>PENERBIT</td>
                            <td><input type="text" name="penerbit" value="<?php echo $row['penerbit']; ?>" placeholder="Penerbit Buku"></td>
                        </tr>
                        <tr>
                            <td>DESKRIPSI</td>
                            <td><textarea name="komentar" cols="50" rows="10" placeholder="deskripsi Buku"><?php echo $row['deskripsi']; ?></textarea>
                        </tr>
                        <tr>
                            <td>
                                <a href="homeadmin.php"><button class="hapus">Back</button></a>
                            </td>
                            <td>
                                <input class="update" type="submit" name="save" value="Update">
                            </td>
                        </tr>
                <?php
            }
        } else {
            echo "0 result";
        }
                ?>
                    </table>
                </form>
            </div>

            <div class="footer">
                <p>© 2022 Urelly Login Form. All rights reserved</p>
            </div>
</body>

</html>