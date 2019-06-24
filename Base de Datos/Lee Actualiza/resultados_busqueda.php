<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<?php
	$busqueda = $_GET["buscar"];
	require("datosConexion.php");
	
	//conectar a la base de datos
	//$conexion = mysqli_connect($db_host, $db_usuario, $db_pass, $db_nombre);
	$conexion = mysqli_connect($db_host, $db_usuario, $db_pass);
	
	//si no se consigue conectarse a la base de datos
	if(mysqli_connect_errno()){
		echo "Fallo al conectar con la base de datos";
		exit();
	}
	
	//si no se consigue la base de datos
	mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BBDD");
	
	//incluya los caracteres latinos
	mysqli_set_charset($conexion, "utf8");
	
	//consulta a la base de datos
	//$sql = "select * from productos where NOMBRE_ARTICULO = '$busqueda' ";
	$sql = "select * from productos where NOMBRE_ARTICULO like '%$busqueda%' ";
	
	//ejecutamos la consulta y lo almacenamos en un recordset
	$resultados = mysqli_query($conexion, $sql);
	
	//con mysqli_fetch_array($resultados,MYSQL_ASSOC) trabajamos con arrays asociativos.
	while($fila = mysqli_fetch_array($resultados,MYSQL_ASSOC)){
				
		echo "<form action='actualiza.php' method='get'>";
			echo "<input type='text' name='codigo' value='" . $fila['CODIGO'] ."'><br><br>";
			echo "<input type='text' name='nombre' value='" . $fila['NOMBRE_ARTICULO'] ."'><br><br>";
			echo "<input type='text' name='seccion' value='" . $fila['SECCION'] ."'><br><br>";
			echo "<input type='text' name='precio' value='" . $fila['PRECIO'] ."'><br><br>";
			echo "<input type='text' name='pais' value='" . $fila['PAIS_ORIGEN'] ."'><br><br>";
			echo "<input type='submit' name='enviar' value='Actualizar'><br><br>";
	    echo "</form>";
	}
	//cerramos la conexion
	mysqli_close($conexion);
?>

</body>
</html>