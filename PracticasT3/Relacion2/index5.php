<?php
    function fecha(){
        $diassemana = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        
        echo $diassemana[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y')."<br>";
    } 

$resultado = fecha(); 

    function fecha2(){
        setlocale(LC_TIME, "spanish");
        echo strftime("%A, %d de %B de %Y");
    }

$resultado = fecha2(); 
?>