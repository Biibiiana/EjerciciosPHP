<?php
include "cabeceraHTML.php";
cabecera("Relación 1: Programación en PHP");
?>
        <h2>Ejercicio 11</h2>
        <p> Imprimir por pantalla todas las tablas de multiplicar de 1 a 10 dentro de una tabla HTML</p>
<?php
    echo "<table border=\"1\">";
    for ($i=1; $i<=10;$i++){
        echo "<tr>";
        echo "<th colspan=\"2\"><h3>Tabla del $i </h3></th>";
        echo "</tr>";
        for ($a=0;$a<=10;$a++){
            print("<tr>");
            print("<td>$a x $i</td><td>".$a*$i."</td>");
            print("</tr>");
        }
    }
    echo "</table>";
?>
    </body>
</html>