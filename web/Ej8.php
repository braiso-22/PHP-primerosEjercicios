<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
    <table>
        <?php
            for($i=0;$i<=10;$i++){
                echo "<tr>";
                for($j=0;$j<=10;$j++){
                    echo "<td>".$i." x ".$j." = ".($j*$i)."\t"."</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
        
        <a href="/web">volver</a>
    </body>
</html>