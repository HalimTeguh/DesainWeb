<!DOCTYPE html>
<html>

<head>
    <title>PHP MySQL</title>
</head>

<body>

    <table>
        <?php
        include "myconnection.php";
        $id = $_GET['id'];
        $query = "SELECT * FROM student WHERE id=$id";
        $result = mysqli_query($connect, $query);
        ?>
            <form enctype="multipart/form-data" action="uploadProcess.php" method="post">
            <table>
                <?php
                    while($row=mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td> ID: </td>
                    <td> <input type="text" name="myid" value="<?php echo $row['id'];?>" readonly> </td>
                </tr>
                <tr>
                    <td> Nama: </td>
                    <td> <input type="text" name="myname" value="<?php echo $row['name'];?>"> </td>
                </tr>
                <tr>
                    <td> Address: </td>
                    <td>
                        <textarea name="myaddress" cols="20" rows="5"><?php echo $row['address'];?></textarea>
                    </td>
                </tr>
                <tr>
                    <td> Choode a file to upload: </td>
                    <td>
                        <input name="tambah" type="file"><br>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" value="Upload File"></td>
                </tr>
            </table>
                
            </form>
        <?php
        }
        ?>
    </table>
</body>

</html>