<?php
include "cabeceraHTML.php";
cabecera("Recepción del formulario.");
include "math.php";
    if($_GET["menu1"] == "A"){
        $sum=suma($_GET["dato1"], $_GET["dato2"]);
        echo "La suma de <strong>".$_GET["dato1"]."</strong> y de <strong>".$_GET["dato2"]."</strong> es <strong>$sum</strong>. <br />";
    }
    elseif($_GET["menu1"] == "B"){
        $rest=resta($_GET["dato1"], $_GET["dato2"]);
        echo "La resta entre <strong>".$_GET["dato1"]."</strong> y de <strong>".$_GET["dato2"]."</strong> es <strong>$rest</strong>. <br />";
    }
    elseif($_GET["menu1"] == "C"){
        $mult=multiplicacion($_GET["dato1"], $_GET["dato2"]);
        echo "La multiplicación entre <strong>".$_GET["dato1"]."</strong> y de <strong>".$_GET["dato2"]."</strong> es <strong>$mult</strong>. <br />";
    }
    elseif($_GET["menu1"] == "D"){
        $div=division($_GET["dato1"], $_GET["dato2"]);
        echo "La división de <strong>".$_GET["dato1"]."</strong> entre <strong>".$_GET["dato2"]."</strong> es <strong>$div</strong>. <br />";
    }
    elseif($_GET["menu1"] == "E"){
        $mod=modulo($_GET["dato1"], $_GET["dato2"]);
        echo "El módulo de <strong>".$_GET["dato1"]."</strong> y de <strong>".$_GET["dato2"]."</strong> es <strong>$mod</strong>. <br />";
    }
    else{
        $elev=elevado($_GET["dato1"], $_GET["dato2"]);
        echo "El número <strong>".$_GET["dato1"]."</strong> elevado a <strong>".$_GET["dato2"]."</strong> es <strong>$elev</strong>. <br />";
    }
?>
    </body>
</html>