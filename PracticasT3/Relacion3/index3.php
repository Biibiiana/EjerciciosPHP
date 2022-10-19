<?php
include "cabeceraHTML.php";
cabecera("Relación 3: Arrays");

    $valoresAleatorios = array();
    for ($i=1;$i<=10;$i++){
        $aleatorio = rand (0,1);
        array_push($valoresAleatorios, $aleatorio);
    }

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
//echo "B: ".print_r ($arrayInverso);
?>
    </body>
</html>