<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>
        <h2> Multidimensional Array</h2>
        <table>
            <tr>
                <th>Judul Film</th>
                <th>Tahun</th>
                <th>Rating</th>
            </tr>
            <?php
                $movie = array(
                    array("Avengers : Invinity War", 2018, 8.7),
                    array("The Avengers", 2012, 8.1),
                    array("Guardian of the Galaxy", 2014, 8.1),
                    array("Iron Man", 2008, 7.9)
                );

                echo '<table>
                <tr>
                    <th>Key</th>
                    <th>Value</th>
                </tr>';

                for($i = 0; $i<4; $i++){
                    echo "<tr>";
                    for($j = 0; $j<3; $j++){
                        echo "<td>".$movie[$i][$j]."</td>";
                    }
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>