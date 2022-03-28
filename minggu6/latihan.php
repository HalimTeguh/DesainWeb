<!DOCTYPE html>
<html>
    <head>
        <title>LATIHAN KALENDER</title><br>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class>
        <?php
            $day = array("Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat");
            $tglskrng = date("d");
            //Mencetak Bulan dan Tahun
            echo "<table>";
            echo "<tr>";
            echo "<td width='40px'>".date("F")."</td>";
            echo "<td width='40px'></td>";
            echo "<td width='40px'></td>";
            echo "<td width='40px'></td>";
            echo "<td width='40px'></td>";
            echo "<td width='40px'></td>";
            echo "<td width='40px'>" .date("Y")."</td>";
            echo "</tr>";         
            echo "</table>";
            echo "<table> ";

            $tgl = 1;
            for($i = 0; $i<6; $i++){
                echo "<tr>";
                if ($i == 0){//perulangan hari
                    echo "<hr>";
                    foreach ($day as $value){
                        
                        if($value == "Sun"){
                        echo "<td align='center' width='40px'><p style='color:red'>$value</p></td>";
                        }else{
                        echo "<td align='center' width='40px' >$value </td>";
                        }
                    }continue;
                }
                for($j = 0; $j<7; $j++){//perulangan tanggal
                    if($i==1 && $j<=1){
                        echo "<td></td>";
                        $tgl = 0;
                    }else if($i == 5 && $j > 4){
                        echo "<td></td>";
                    }
                    else{                      
                        if($j == 0){
                        echo "<td align='center'><p style='color:red '>$tgl</p></td>";
                        }else if($tgl == $tglskrng){
                        echo "<td align='center'><p style='color:blue '>$tgl</p></td>";//hari sekarang warna biru ^ o ^
                        }else{
                        echo "<td align='center'><p>$tgl</p></td>";
                        }
                    }
                    $tgl++;
                }
                echo "</tr>";
            }
            echo "</table>";
        ?></div>
    </body>
</html>