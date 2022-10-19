<?php
include "cabeceraHTML.php";
cabecera("Relación 1: Programación en PHP");
?>
        <h2>Ejercicio 15</h2>
        <p>Muestra una tabla con los 20 primeros números en diferentes bases: decimal, binario, octal y hexadecimal.
        Usa  un bucle y printf  para conseguir presentar de distintas formas la variable que uses en el bucle.</p>
<?php
    echo "<table border=\"1\">";
    echo "<tr>";
    echo "<th colspan=\"4\"><h1>Tabla del números del 1 al 20 en sus diferentes bases. </h1></th>";
    echo "</tr>";
    echo "<tr>";
    echo "<th><h3>Decimal</h3></th>";
    echo "<th><h3>Binario</h3></th>";
    echo "<th><h3>Octal</h3></th>";
    echo "<th><h3>Hexadecimal</h3></th>";
    echo "</tr>";
	for ($a=0;$a<=20;$a++){
        print("<tr>");
        print("<td>$a</td>");
        print("<td>".decbin($a)."</td>");
        print("<td>".decoct($a)."</td>");
        print("<td>".dechex($a)."</td>");
        print("</tr>");
    }
    echo "</table>";
?>
    </body>
</html>