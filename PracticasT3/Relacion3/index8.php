<?php
include "cabeceraHTML.php";
cabecera("Relación 3: Arrays");

    function getNumRegPers($profesor){
        foreach($profesor as $prof => $value){
            echo "El número de registro personal de ";
            foreach($value["nombre"] as $value2){
                echo $value2;
            }
            echo " es $value";
        }
    }

$profesores = array("1" => array("nombre" => "Pepillo",
    "apellidos" => array("1er" => "García",
        "2do" => "García"),
    "telefono" => "999112233",
    "fechNacimiento" => "01/01/1960"),
    "2" => array("nombre" => "Pepa",
    "apellidos" => array("1er" => "López",
        "2do" => "García"),
    "telefono" => "999444555",
    "fechNacimiento" => "01/01/1970"),
    "3" => array("nombre" => "Laura",
    "apellidos" => array("1er" => "Gómez",
        "2do" => "Pérez"),
    "telefono" => "999666777",
    "fechNacimiento" => "01/01/1980"),
    "4" => array("nombre" => "Julia",
    "apellidos" => array("1er" => "Martín",
        "2do" => "Martínez"),
    "telefono" => "999888999",
    "fechNacimiento" => "01/01/1990"));

$resultado = getNumRegPers($profesores);
/*
    $arrayInverso = array();
    foreach ($valoresAleatorios as $binario)
        if ($binario == 0) {
            array_push($arrayInverso, 1);
        } else {
            array_push($arrayInverso, 0);
        }

echo "A: ".json_encode($valoresAleatorios)."<br>";
echo "B: ".json_encode($arrayInverso);


//echo "A: ".print_r ($valoresAleatorios)."<br>";
//echo "B: ".print_r ($arrayInverso);*/
?>
    </body>
</html>