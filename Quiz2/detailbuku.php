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
                    <h3>DETAIL</h3>
                </a>
            </td>
            <td>
                    <?php
                    session_start();
                    if(isset($_SESSION["username"])){
                    ?>
                        <a href="logout.php"><h3>LOGOUT</h3></a>
                    <?php
                    }else{
                    ?>
                        <a href="login.php"><h3>LOGIN</h3></a>
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
            <h3>DETAIL BUKU</h3>
        </div>
        <table class="isitable">
            <tr>
                <td>ID BUKU</td>
                <td>: <?php echo $row["id_buku"]; ?></td>
            </tr>
            <tr>
                <td>JUDUL BUKU</td>
                <td>: <?php echo $row["judul"]; ?></td>
            </tr>
            <tr>
                <td>PENGARANG</td>
                <td>: <?php echo $row["pengarang"]; ?></td>
            </tr>
            <tr>
                <td>PENERBIT</td>
                <td>: <?php echo $row["penerbit"]; ?></td>
            </tr>
            <tr>
                <td>DESKRIPSI</td>
                <td>: <?php echo $row["deskripsi"]; ?></td>
            </tr>
            <tr>
                <td>
                    <?php
                    if(isset($_SESSION["username"])){
                    ?>
                        <a href="homeadmin.php"><button class="hapus">Back</button></a>
                    <?php
                    }else{
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