<html>
	<head>
		<title>Pagina ppal DWES-2DAW</title>
		<meta charset="ISO-UTF8">
	</head>
	<body>
		<h1>Página principal de la asignatura DWES-2DAW</h1>
<?php
	echo '<h2>Hola mundo</h2>';
	$nombre = 'Pepillo';
	echo 'Hola ' . $nombre;

	$fecha_actual = localtime(time(), 1);
	$anyo_actual  = $fecha_actual["tm_year"] + 1900;
	$mes_actual   = $fecha_actual["tm_mon"] + 1;
	$dia_actual   = $fecha_actual["tm_mday"];
	print "<p>Hoy es el $dia_actual/$mes_actual/$anyo_actual.</p>";
?>
	</body>
</html>