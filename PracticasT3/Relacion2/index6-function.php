<?php
    function divisores($num){
        $divisores = array();
        for($i = 1; $i <= $num; $i ++) {
                if ($num % $i == 0) {
                    array_push($divisores, $i);
                }
        }
        return $divisores;
    } 

    function mcd($num1, $num2){
        $divisoresNum1 = array();
        $divisoresNum2 = array();
        echo "Para comprobarlo: <br>";
        $divisoresNum1 = divisores($num1);
        print_r($divisoresNum1);
        echo "<br>";
        $divisoresNum2 = divisores($num2);
        print_r($divisoresNum2);
        echo "<br>";

        $coincidencias = array_intersect($divisoresNum1, $divisoresNum2);

        $maxcd = 0;
        foreach($coincidencias as $value) {
            if($maxcd<$value){
                $maxcd = $value;
            }
        }
        return $maxcd;
    }
?>