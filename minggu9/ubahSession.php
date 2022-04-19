<?php
    session_start();
?>
<html>
    <body>
        <?php
            $_SESSION["makananfav"] = "Nasi Goreng";

            echo "Session makananfav telah diubah";
        ?>
    </body>
</html>