<html>
 <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Bibi"/>
    <title>Boletín de notas.</title>
    <style type="text/css">
        body {background-color: rgb(152, 231, 255); }
        table {border: 1px solid white; margin: 0 auto; font-size: large; }
        h1, p, th {text-align: center;}
        th {background-color: rgb(61, 177, 212);}
        td {text-align: right; background-color: rgb(97, 218, 255);}
        p {font-size: large; }
    </style>
 </head>
 <body>
<?php
    include ("resultados.php");

    echo "<hr>";
    echo "<h1>Boletin de notas</h1>";
    echo "<hr><br>";
    echo "<table border='1em solid black' background-color='rgb(141, 80, 255)'>";
    echo "  <tr>";
    echo "      <th>Asignatura</th>";
    echo "      <th>Trimestre 1</th>";
    echo "      <th>Trimestre 2</th>";
    echo "      <th>Trimestre 3</th>";
    echo "      <th>Media</th>";
    echo "  </tr>";
    $sumMedias = 0;
    foreach ($notas as $asig => $value){
        echo "<tr>";
        echo "  <th>$asig</th>";
        $sumNotas = 0;
        foreach ($value["trimestres"] as $value2){
            echo "  <td>".$value2."</td>";
            $sumNotas += $value2;
            $divisor = count($value["trimestres"]);
        }
        $media = $sumNotas/$divisor;
        $sumMedias += $media;
        printf("    <td>%.1f</td>",$media);
        echo "</tr>";
    }
    echo "</table>";  
    echo "<br>";
    printf("    <p><strong>La media nota total es: %.1f</strong></p>",($sumMedias/count($notas)));
?>
 </body>
</html>