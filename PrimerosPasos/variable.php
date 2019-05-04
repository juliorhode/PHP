<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
	//declaracion de variable
	$nombre = "Julio";
	$edad = 39;
	
	//mostramos el valor de la variable
	//para concatenar se unsa el "." dejando un espacio... es como usar el "+"
	print "El nombre es " . $nombre;
	print "<br>";
	print "Mi edad es $edad";
	print "<br>";
	
	//print y echo imprimen en pantalla
	echo "Mi nombre es " . $nombre . " y  mi edad es " . $edad . " años.";
	print "<br>";
	//diferencia con echo es que puede imprimir varias variables o varias expresiones.
	//print es una funcion y echo es una expresion. print consume mucho mas recursos y siempre se recomienda que se use echo
	echo $nombre,$edad
?>
</body>
</html>