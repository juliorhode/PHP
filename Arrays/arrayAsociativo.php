<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
	//Para asociar un nombre con su posicion, se utiliza "=>"... no confundir "->" que es para accede a propiedad o metodo
	
	//NOTA: no repetir el nombre asociativo igual a otro porque va a suplantar su valor
	$datos = array("Nombre"=>"Julio", "Apellido"=>"Ferrer", "Edad"=>39);
	//aqui queda almacenado el valor Julio dentro de la primera posicion del array. Esta posicion no queda identificada con el indice 0, sino que queda con un nombre asociativo "Nombre"
	echo $datos["Apellido"];
	
	echo "<br>";
	
	//comprbar si es una variable o un array
	if(is_array($datos)){
		echo "Es un Array";
	}else{
		echo "No es un Array";
	}
	
	echo "<br>";
	
	$datos2="";
	if(is_array($datos2)){
		echo "Es un Array";
	}else{
		echo "No es un Array";
	}
	
	echo "<br>";

	/*
	Imprimir los valores de un Array Asociativo:
		1)nombre del array
		2) palabra reservada "as"
		3)colocar un termino para definir la clave
		4)colocar una variable para referirnos a los valores
	*/
	foreach($datos as $clave=>$valor){
		echo "A $clave le corresponde $valor <br>";
	}
	
	echo "<br>";
	//Agregar un nuevo elemento mas al array
	//$datos[<clave>]=<valor>;
	$datos["Pais"]="Venezuela";
	foreach($datos as $clave=>$valor){
		echo "A $clave le corresponde $valor <br>";
	}
?>
</body>
</html>