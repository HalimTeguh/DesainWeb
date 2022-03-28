<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php
            $nilaiA = 66;
            $nilaiB = 40;
            if($nilaiA >= 80){
                echo "a. nilai A";
            }else if($nilaiA >= 70){
                echo "a. nilai B";
            }else if($nilaiA >= 60){
                echo "a. nilai C";
            }else if($nilaiA >= 50){
                echo "a. nilai D";
            }else{
                echo "a. nilai E";
            }
            echo "\n\n\n";

            if($nilaiB >= 80){
                echo "b. nilai A";
            }else if($nilaiB >= 70){
                echo "b. nilai B";
            }else if($nilaiB >= 60){
                echo "b. nilai C";
            }else if($nilaiB >= 50){
                echo "b. nilai D";
            }else{
                echo "b. nilai E";
            }
        ?>
    </body>
</html>