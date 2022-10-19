<?php
    function patron($contraseña){
        $pattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{6,15}$/";
        if(preg_match($pattern, $contraseña)){
            echo "Es <strong>válida</strong> la contraseña.<br>";
        } 
        else {
            echo "<strong>No es válida</strong> la contraseña. Debe contener al menos una mayúscula, una minúscula, un número y un símbolo (!@#$%^&*_=+-), debe tener entre 6 y 15 caracteres.<br>";
        }
    } 
   
//Ejemplo
$contraseña = "Servidor=1"; 
$resultado = patron($contraseña); 

//Ejemplo2
$contraseña = "5"; 
$resultado = patron($contraseña);
?>