<?php
    function factorial($num){
        $factorial = 1; 
        for ($i = 1; $i <= $num; $i++){ 
            $factorial = $factorial * $i; 
        } 
        return $factorial; 
    } 
   
//Ejemplo
$numero = 5; 
$resultado = factorial($numero); 
echo "Factorial de $numero  = $resultado";
?>