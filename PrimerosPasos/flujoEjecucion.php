<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
	
	

<?php
	echo "Este es mi primer mensaje <br>";
	
	//incluimos un archivo externo
	include("flujoEjecucion_Funcion.php");
	
	//incluimos un archivo externo pero es requerido
	//require("flujoEjecucion_Funcion.php");
	
	
	//pueden existir multiples bloques de php
	/*
	
		las funciones, los bucles y los consicionales, rompen el flujo de ejecucion
	*/
	
			
	
	
	
	
	echo "Este es mi segundo mensaje <br>";
	
	dameDatos();
	
?>
<body>
</body>
</html>