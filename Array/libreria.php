<html>
 <head>
  <title>Ejercicio arrays</title>
  <meta charset="UTF-8" />
 </head>
 <body>
<?php
	$libros = array("1" => array("titulo" => "El siglo de las luces.",
								        "autor" => "Carpentier, Alejo",
                                        "precio" => "12.50",
                                        "cantidad" => "20"),
                    "2" => array("titulo" => "Sobre héroes y tumbas.",
                                        "autor" => "Sábato, Ernesto",
                                        "precio" => "11",
                                        "cantidad" => "5"),
                    "3" => array("titulo" => "El baile de la victoria.",
                                        "autor" => "Skármeta, Antonio",
                                        "precio" => "15",
                                        "cantidad" => "8"),
					"4" => array("titulo" => "Rayuela.",
                                        "autor" => "Cortázar, Julio",
                                        "precio" => "11.50",
                                        "cantidad" => "12"),
					"5" => array("titulo" => "Antes del fin.",
                                        "autor" => "Sábato, Ernesto",
                                        "precio" => "13",
                                        "cantidad" => "3"));
	
    echo "<h3>Catálogo de mi librería.</h3>";
    echo "<ul>";
		foreach ($libros as $id => $value){
			echo "<li>". $value["titulo"]."</li>";
			echo "<ul>";
				echo "<li>Autor: ".$value["autor"]."</li>";
				echo "<li>Precio: ".$value["precio"]."</li>";
				echo "<li>Stock: ".$value["cantidad"]."</li>";
			echo "</ul>";
		}
	echo "</ul>";

?>
 </body>
</html>