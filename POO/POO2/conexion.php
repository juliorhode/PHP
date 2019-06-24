<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
	//datos para la base de datos 
	$db_host 	= "localhost";
	$db_nombre 	= "pruebas";
	$db_usuario = "root";
	$db_pass 	= "";
	
	$conexion = new mysqli($db_host,$db_usuario,$db_pass,$db_nombre);
	if($conexion->connect_errno){
		echo "Fallo la conexion " . $conexion->connect_errno;
	}
	//forma procedimental
	//mysqli_set_charset($conexion,"utf8");
	
	//orientado a objetos
	$conexion->set_charset("utf8");
	
	$sql = "select * from productos";
	
	//Forma procedimental
	//$resultado = mysqli_query($conexion,$sql);
	
	//orientado a objetos
	$resultado = $conexion->query($sql);
	if($conexion->errno){
		die($conexion->error);
	}
	//Forma procedimental
	/*
	while($fila = mysqli_fetch_array($resultado, MYSQL_ASSOC)){	
		echo "<table><tr><td>";
		echo $fila['CODIGO'] . "</td><td>";
		echo $fila['NOMBRE_ARTICULO'] . "</td><td>";
		echo $fila['SECCION'] . "</td><td>";
		echo $fila['PRECIO'] . "</td><td>";
		echo $fila['PAIS_ORIGEN'] . "</td><td></tr></table>";
		echo "<br>";
	}
	*/
	
	//orientado a objetos
	/*
	while($fila=$resultado->fetch_array()){
		echo "<table><tr><td>";
		echo $fila[0] . "</td><td>";
		echo $fila[1] . "</td><td>";
		echo $fila[2] . "</td><td>";
		echo $fila[3] . "</td><td>";
		echo $fila[4] . "</td><td></tr></table>";
		echo "<br>";
	}
	*/
	
	while($fila=$resultado->fetch_assoc()){
		echo "<table><tr><td>";
		echo $fila['CODIGO'] . "</td><td>";
		echo $fila['NOMBRE_ARTICULO'] . "</td><td>";
		echo $fila['SECCION'] . "</td><td>";
		echo $fila['PRECIO'] . "</td><td>";
		echo $fila['PAIS_ORIGEN'] . "</td><td></tr></table>";
		echo "<br>";
	}
	
	
	//Forma procedimental
	//mysqli_close($conexion);
	
	//orientado a objetos
	$conexion->close();
	
	
	
	
	
	
	
	
	
?>	
</body>
</html>