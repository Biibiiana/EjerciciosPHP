<?php
include "cabeceraHTML.php";
cabecera("Relación 3: Arrays");

$peliculas = array("1" => "Yo soy Sam",
                    "2" => "Wonder",
                    "3" => "Forest Gump",
                    "4" => "Uno de los nuestros",
                    "5" => "Náufrago",
                    "6" => "Érase una vez en Hollygood",
                    "7" => "Dirty Dancing",
                    "8" => "Querido Jhon",
                    "9" => "Jumanji",
                    "10" => "Un ciudadano ejemplar");

    foreach ($peliculas as $peli => $value){
        echo "Película $peli: '$value'<br>";
    }
?>
    </body>
</html>