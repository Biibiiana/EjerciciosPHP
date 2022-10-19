<?php
include "cabeceraHTML.php";
cabecera("Relación 2: Funciones");
?>
        <h2>Ejercicio 7</h2>
        <p>Escribe una función para comprobar si un número es primo y un programa para probarla</p>
<?php
    include "index7-function.php";
    $numero = 31;

    if(esPrimo($numero)){
        echo '<strong>Es primo</strong>';
    }else{
        echo '<strong>No es primo</strong>';
    }
?>
    </body>
</html>