<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
	<style>
		.resaltar{
			color: #f00;
			font-weight: bold;
		}
	</style>
</head>

<body>
<?php
	echo "<p class='resaltar'>Esto es un ejemplo de frase.</p>";
	//forma de hacerlo usando comillas dobles
	echo "<p class=\"resaltar\">Esto es un ejemplo de frase.</p>";
	
	$nombre = "Julio";
	echo 'Hola $nombre';
	echo "<br>";
	echo "Hola $nombre";
	echo "<br>";
	//strcmp --> compara string mayusculas y minusculas
	//strcasecmp --> compara string ignorando mayusculas o minusculas
	$variable1 = "Casa";
	$variable2 = "CASA";
	$resultado = strcmp($variable1,$variable2);//devuelve 1 si no son iguales y 0 si son iguales... debe devolver 1
	echo "El resultado con strcmp() es " . $resultado;
	echo "<br>";
	if($resultado){//resultado es 1
		echo "No coinciden";
	}else{//resultado es 0
		echo "Coinciden";
	}
	echo "<br>";
	$resultado = strcasecmp($variable1,$variable2);
	echo "El resultado con strcasecmp() es " . $resultado;
	echo "<br>";
	if($resultado){
		echo "No coinciden";
	}else{
		echo "Coinciden";
	}
	echo "<br>";
	echo "Todo en mayusculas:" . strtoupper("hola como estas"); 
	echo "<br>";
  	echo "Todo en minusculas:" . strtolower("hola COMO ESTAS"); 
	echo "<br>";
  	echo "Primera letra en mayusculas:" . ucfirst(strtolower("hola COMO estas")); 
	echo "<br>";
	echo "Primera letra de cada una en mayusculas:" . ucwords(strtolower("hola COMO estas")); 
	echo "<br>";
	
?>
</body>
</html>