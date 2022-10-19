<?php
    function potencia($num=2, $exp=2){
        $potencia = $num ** $exp;  
        echo "La potencia de $num ^ $exp = $potencia <br>";
    } 
   
//Ejemplo
$numero = 5; 
$resultado = potencia($numero);

//Ejemplo2
$num1 = 5;
$num2 = 3;
$resultado = potencia($num1, $num2);
?>