<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
	
	/*	
	PRIMERA FORMA
	//php da por entendido el indice si no se le indica
	$semana[]= "Lunes";
	$semana[]= "Martes";
	$semana[]= "Miercoles";
	$semana[]= "Jueves";
	$semana[]= "Viernes";
	
	SEGUNDA FORMA
	$semana[0]= "Lunes";
	$semana[1]= "Martes";
	$semana[2]= "Miercoles";
	$semana[3]= "Jueves";
	$semana[4]= "Viernes";
	*/
	
	//TERCERA FORMA
	$semana = array("Lunes","Martes","Miercoles","Jueves");
	echo $semana[2];
	echo "<br><br>";
	echo "Imprimir valores del Array <br>";
	echo "**********************";
	echo "<br>";
	
	//count(<nombreArray>) devuelve la cantidad de elementos
	for($i = 0; $i < count($semana); $i++){
		echo $semana[$i] . "<br>";
	}
	
	//agrega un nuevo elemento
	$semana[]= "Viernes";
	
	echo "<br><br>";
	echo "Imprimir valores del Array <br>";
	echo "**********************";
	echo "<br>";
	
	for($i = 0; $i < count($semana); $i++){
		echo $semana[$i] . "<br>";
	}
	
	echo "<br><br>";
	echo "Ordenar por orden alfabetico el Array <br>";
	echo "*******************************";
	echo "<br>";
	//ordena el array
	sort($semana);
	for($i = 0; $i < count($semana); $i++){
		echo $semana[$i] . "<br>";
	}
?>
</body>
</html>