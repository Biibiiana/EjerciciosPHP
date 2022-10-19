<?php
include "cabeceraHTML.php";
cabecera("Relación 2: Funciones");
?>
        <h2>Ejercicio 6</h2>
        <p>Escribe una función que calcule el máximo común divisor de dos números y un programa para probarla.</p>
<?php
    include "index6-function.php";
    //Ejemplo
    $num1 = 8; 
    $num2 = 12;
    $resultado = mcd($num1, $num2); 
    echo "<strong>El máximo común divisor de $num1 y $num2 es $resultado</strong> <br><br>";

    //Ejemplo2
    $num1 = 15; 
    $num2 = 9;
    $resultado = mcd($num1, $num2); 
    echo "<strong>El máximo común divisor de $num1 y $num2 es $resultado</strong> <br><br>";

    //Ejemplo3
    $num1 = 22; 
    $num2 = 11;
    $resultado = mcd($num1, $num2); 
    echo "<strong>El máximo común divisor de $num1 y $num2 es $resultado</strong> <br><br>";
?>
    </body>
</html>