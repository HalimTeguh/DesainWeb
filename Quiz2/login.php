<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link href="style.css" rel="stylesheet" type="text/css" media="all"/>

</head>

<body>
    <?php
        if (isset($_GET["error"])) {
            $error = $_GET["error"];
        } else {
            $error = "";
        }
    $message = "";
    if ($error == "gagal") {
        $message = "Gagal login, silahkan coba kembali";
    }
    ?>
    <div class="header">
        <table>
            <tr>
                <td><h1>TOKO BUKU URELLY</h1></td>
                <td><a href="homeguest.php"><h3>HOME</h3></a></td>
            </tr>
        </table>
    </div>
    <div class="container">

        <h1>WELCOME</h1>
        <div class="main-agileinfo">
            <div class="agileits-top">
                <p style="color:red"><?php echo $message ?></p>
                <form action="prosesLogin.php" method="POST" >
                    <input class="text email" type="text" name="username" placeholder="username" required="yes">
                    <input class="text" type="password" name="password" placeholder="Password" required="">
                    <input type="submit" value="SIGN IN" name="submit">
                </form>
            </div>
        </div>
        <div class="colorlibcopy-agile">
			<p>© 2022 Urelly Login Form. All rights reserved</p>
		</div>
    </div>
</body>

</html>