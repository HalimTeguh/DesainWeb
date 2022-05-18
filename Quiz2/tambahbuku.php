<!DOCTYPE html>
<html>

<head>
    <title>PHP MySQL</title>
</head>

<body>
    <form action="insertProcess.php" method="get">
        <table class="isitable">
            <tr>
                <td>ID BUKU</td>
                <td> <input type="text" name="id_buku" placeholder="ID Buku"><?php echo $row['id_buku']; ?></td>
            </tr>
            <tr>
                <td>JUDUL BUKU</td>
                <td><input type="text" name="judul" placeholder="Judul Buku"><?php echo $row['judul']; ?></td>
            </tr>
            <tr>
                <td>PENGARANG</td>
                <td><input type="text" name="pengarang" placeholder="Pengarang Buku"><?php echo $row['pengarang']; ?></td>
            </tr>
            <tr>
                <td>PENERBIT</td>
                <td><input type="text" name="penerbit" placeholder="Penerbit Buku"><?php echo $row['penerbit']; ?></td>
            </tr>
            <tr>
                <td>DESKRIPSI</td>
                <td><input type="textarea">
                    <textarea name="komentar" cols="50" rows="10" placeholder="deskripsi Buku"><?php echo $row['deskripsi']; ?></textarea>
            </tr>
            <tr>
                <td>
                    <a href="homeadmin.php"><button class="hapus">Back</button></a>
                </td>
                <td><input type="submit" name="send" value="Tambah"></td>
            </tr>
        </table>
    </form>
</body>

</html>