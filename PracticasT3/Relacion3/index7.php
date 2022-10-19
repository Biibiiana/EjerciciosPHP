<?php
include "cabeceraHTML.php";
cabecera("Relación 3: Arrays");

    echo "<table border=\"1\">";
    echo "<tr>";
    echo "<th colspan=\"2\" align=\"left\"><h1>Valores de \$_SERVER</h1></th>";
    echo "</tr>";
    foreach ($_SERVER as $nombre => $value){
        print("<tr>");
        print("<td>$nombre</td>");
        print("<td>$value</td>");
        print("</tr>");
    }
    echo "</table>";
?>
    </body>
</html>