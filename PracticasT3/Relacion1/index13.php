<?php
include "cabeceraHTML.php";
cabecera("Relación 1: Programación en PHP");
?>
        <h2>Ejercicio 13</h2>
        <p>Escriba un script muestre la tirada de dos dados al azar (usar rand) y diga:</p>
        <ul>
            <li>si ha salido una pareja de valores iguales</li>
            <li>o el mayor de los valores que se han obtenido en la tirada</li>
        </ul>
<?php    
    $dado1 = rand (1,6);
    $dado2 = rand (1,6);

    if ($dado1 == $dado2) {
        print "  <p><strong>Ha sacado una pareja de $dado1.</strong></p>\n";
    } else {
        print "  <p><strong>No ha sacado pareja. El valor más alto es " . max($dado1, $dado2) . ".</strong></p>\n";
    }
?>
    </body>
</html>