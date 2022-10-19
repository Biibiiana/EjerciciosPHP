<html>
	<head>
		<title>Tabla del 8</title>
		<meta charset="ISO-UTF8">
	</head>
	<body>
		
<?php
    $num = 8;
    echo "<table border=\"1\">";
    echo "<tr>";
    echo "<th colspan=\"2\"><h1>Tabla del $num </h1></th>";
    echo "</tr>";
	for ($a=0;$a<=10;$a++){
        print("<tr>");
        print("<td>$a x $num</td><td>".$a*$num."</td>");
        print("</tr>");
    }
    echo "</table>";
?>
	</body>
</html>